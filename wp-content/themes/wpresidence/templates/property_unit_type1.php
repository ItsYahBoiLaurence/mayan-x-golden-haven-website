<?php
global $align;
global $is_shortcode;
global $wpestate_options;
global $row_number_col;
$col_data       =   wpestate_return_unit_class($wpestate_no_listins_per_row,$wpestate_options['content_class'],$align,$is_shortcode,$row_number_col,$wpestate_property_unit_slider);
$title          =   get_the_title();
$link           =   esc_url( get_permalink() );
$main_image     =   wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'listing_full_slider');
?>



<div class="<?php echo esc_html($col_data['col_class']);?> listing_wrapper property_unit_type1"
    data-org="<?php echo esc_attr($col_data['col_org']);?>"
    data-main-modal="<?php echo esc_attr($main_image[0]); ?>"
    data-modal-title="<?php echo esc_attr($title);?>"
    data-modal-link="<?php echo esc_attr($link);?>"
    data-listid="<?php echo intval($post->ID);?>" >

    <div class="property_listing property_unit_type1 <?php echo wpestate_interior_classes($wpestate_uset_unit); ?> "
         data-link="<?php   if(  $wpestate_property_unit_slider==0){ echo esc_url($link);}?>">

        <?php if ($wpestate_uset_unit==1){
            wpestate_build_unit_custom_structure($wpestate_custom_unit_structure,$post->ID,$wpestate_property_unit_slider);
        }else{ ?>

                <div class="listing-unit-img-wrapper">
                    <div class="prop_new_details">
                        <div class="prop_new_details_back"></div>
                         <div class="featured_gradient"></div>
                    </div>

                    <?php get_template_part('templates/property_cards_templates/property_card_slider');?>
                    <?php get_template_part('templates/property_cards_templates/property_card_price'); ?>
                    <?php get_template_part('templates/property_cards_templates/property_card_favorite'); ?>
                    <?php get_template_part('templates/property_cards_templates/property_card_status'); ?>

                </div>


                <?php get_template_part('templates/property_cards_templates/property_card_featured_label'); ?>
                <?php get_template_part('templates/property_cards_templates/property_card_title'); ?>
                <?php get_template_part('templates/property_cards_templates/property_card_adress_type2'); ?>
                <?php get_template_part('templates/property_cards_templates/property_card_category_type1'); ?>
                <?php get_template_part('templates/property_cards_templates/property_card_details_type1'); ?>




                <div class="property_location">
                    <?php get_template_part('templates/property_cards_templates/property_card_agent_details_default'); ?>
                    <?php get_template_part('templates/property_cards_templates/property_card_actions_type2'); ?>
                </div>

            <?php
            }// end if custom structure
            ?>
    </div>
</div>
