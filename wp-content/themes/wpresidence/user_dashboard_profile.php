<?php
// Template Name: User Dashboard Profile Page
// Wp Estate Pack
wpestate_dashboard_header_permissions();

global $wpestate_social_login;
$current_user       = wp_get_current_user();
$dash_profile_link  = wpestate_get_template_link('user_dashboard_profile.php');


//////////////////////////////////////////////////////////////////////////////////////////
// Paypal payments for membeship packages
//////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['token']) ){
    $allowed_html        =   array();
    $token               =   esc_html ( wp_kses( $_GET['token'], $allowed_html) );
    $token_recursive     =   esc_html ( wp_kses( $_GET['token'], $allowed_html) );


    // get transfer data
    $save_data              =   get_option('paypal_pack_transfer','');
    $payment_execute_url    =   $save_data[$current_user->ID ]['paypal_execute'];
    $token                  =   $save_data[$current_user->ID ]['paypal_token'];
    $pack_id                =   $save_data[$current_user->ID ]['pack_id'];
    $recursive              =   0;
    if (isset ( $save_data[$current_user->ID ]['recursive']) ){
        $recursive              =   $save_data[$current_user->ID ]['recursive'];
    }


    if( isset($_GET['PayerID']) ){
            $payerId             =   esc_html( wp_kses( $_GET['PayerID'], $allowed_html) );

            $payment_execute = array(
                'payer_id' => $payerId
               );
            $json = json_encode($payment_execute);
            $json_resp = wpestate_make_post_call($payment_execute_url, $json,$token);

            $save_data[$current_user->ID ]=array();
            update_option ('paypal_pack_transfer',$save_data);

            if($json_resp['state']=='approved' ){

                if( wpestate_check_downgrade_situation($current_user->ID,$pack_id) ){
                   wpestate_downgrade_to_pack( $current_user->ID, $pack_id );
                   wpestate_upgrade_user_membership($current_user->ID,$pack_id,1,'');
                }else{
                   wpestate_upgrade_user_membership($current_user->ID,$pack_id,1,'');
                }
                wp_redirect( $dash_profile_link ); exit;
            }
         //end if Get
    }else{
        $payment_execute = array();
        $json       = json_encode($payment_execute);
        $json_resp  = wpestate_make_post_call($payment_execute_url, $json,$token);

        if( isset($json_resp['state']) && $json_resp['state']=='Active'){
            if( wpestate_check_downgrade_situation($current_user->ID,$pack_id) ){
                wpestate_downgrade_to_pack( $current_user->ID, $pack_id );
                wpestate_upgrade_user_membership($current_user->ID,$pack_id,2,'');
            }else{
                wpestate_upgrade_user_membership($current_user->ID,$pack_id,2,'');
            }

            // canel curent agrement
            update_user_meta($current_user->ID,'paypal_agreement',$json_resp['id']);

            wp_redirect( $dash_profile_link );
            exit();

         }
    }

    update_option('paypal_pack_transfer','');
}


//////////////////////////////////////////////////////////////////////////////////////////
// 3rd party login code
//////////////////////////////////////////////////////////////////////////////////////////

if( ( isset($_SESSION['wpestate_is_fb'] )  && $_SESSION['wpestate_is_fb'] =   'ison'  && isset($_GET['code']) && isset($_GET['state']) ) ){
   $wpestate_social_login->facebook_authentificate_user();
} else if ( isset($_SESSION['wpestate_is_google'] )  && $_SESSION['wpestate_is_google'] =   'ison'  &&  isset($_GET['code'])){
    $wpestate_social_login->google_authentificate_user();
} else if( isset($_SESSION['wpestate_is_twet'] )  && $_SESSION['wpestate_is_twet'] =   'ison'  && isset($_REQUEST['oauth_verifier'])){
    $wpestate_social_login->twiter_authentificate_user();
} else{
    if ( !is_user_logged_in() ) {
        wp_redirect(   esc_url(home_url('/')) );exit;
        exit();
    }
}

if( isset($_SESSION['token_tw']) ){
    unset($_SESSION['token_tw']);
    unset($_SESSION['token_secret_tw']);
    unset($_SESSION['wpestate_is_twet']);
    unset($_SESSION['wpestate_is_fb']);
    unset($_SESSION['wpestate_is_google']);
}




get_header();
?>

<div class="row row_user_dashboard">
    <?php  get_template_part('templates/dashboard-templates/dashboard-left-col'); ?>

    <div class="col-md-9 dashboard-margin">
        <?php
          wpestate_show_dashboard_title(get_the_title());

          $user_role = intval (get_user_meta( $current_user->ID, 'user_estate_role', true) );

          if($user_role==1 || $user_role==0){
              get_template_part('templates/dashboard-templates/user_profile');
          }else if($user_role==2){
              get_template_part('templates/dashboard-templates/user_profile_agent');
          }else if($user_role==3){
              get_template_part('templates/dashboard-templates/user_profile_agency');
          }else if($user_role==4){
              get_template_part('templates/dashboard-templates/user_profile_developer');
          }

        ?>
    </div>
</div>

<?php get_footer(); ?>
