<form id="new_post" name="new_post" method="post" action="" enctype="multipart/form-data" class="add-estate add-vrm-contact">
       <?php wp_nonce_field( 'dashboard_property_front_crm', 'dashboard_property_front_crm_nonce'); ?>
        <div class="col-md-12 row_dasboard-prop-listing">
               <?php
               global $wpestate_show_err;
               if($wpestate_show_err){
                   print '<div class="alert alert-danger">'.$wpestate_show_err.'</div>';
               }
               ?>
        </div>



       <?php
       $contact_edit='';
       if(isset($_GET['lead_edit'])){
         $contact_edit=intval($_GET['lead_edit']);
       }

        print '<div class="col-md-7 wpestate_dash_coluns">  <div class="wpestate_dashboard_content_wrapper">';
            include( locate_template('crm_functions/templates/crm_leads_submit.php') );

         ?>

         <div class="profile-onprofile row submitrow">
                <input type="hidden" name="action" value="<?php print esc_html($action);?>">

                <?php
                if($action=='edit'){ ?>
                    <input type="submit" class="wpresidence_button" id="form_submit_1" value="<?php esc_html_e('Save Changes', 'wpresidence') ?>" />
                <?php
                }else{
                ?>
                   <input type="submit" class="wpresidence_button" name="submit_prop" id="form_submit_1" value="<?php esc_html_e('Add Lead', 'wpresidence') ?>" />
                <?php
                }
                ?>
          </div>

        <?php
        print '</div></div>';

        if(intval($contact_edit)!=0){
          print '<div class="col-md-5 wpestate_dash_coluns wpestate_crm_display_contact_info_wrapper ">
          <div class="wpestate_dashboard_content_wrapper">';
            print wpestate_crm_show_contact_details($contact_edit,1);
          print '</div></div>';

          print '<div class="col-md-5 wpestate_dash_coluns wpestate_crm_add_coment_contact_wrapper ">
          <div class="wpestate_dashboard_content_wrapper">';
            echo  wpestate_crm_show_notes($contact_edit);
            echo   wpestate_crm_display_add_note($contact_edit);
          print '</div></div>';
        }
      ?>
    </div><!-- end row-->

    <input type="hidden" name="edit_id" value="<?php print intval($edit_id);?>">
    <input type="hidden" name="images_todelete" id="images_todelete" value="">
    <?php wp_nonce_field('submit_new_estate','new_estate'); ?>
</form>
