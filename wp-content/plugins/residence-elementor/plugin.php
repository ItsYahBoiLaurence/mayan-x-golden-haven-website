<?php
namespace ElementorWpResidence;

/**
 * Class Plugin
 *
 * Main Plugin class
 * @since 1.2.0
 */
class Plugin {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_scripts
	 *
	 * Load required plugin core files.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function widget_scripts() {
		
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_widgets_files() {

                require_once( __DIR__ . '/widgets/helper.php' );
                require_once( __DIR__ . '/widgets/recent-items.php' );
                require_once( __DIR__ . '/widgets/recent-items-slider.php' );
                require_once( __DIR__ . '/widgets/list-items-by-id.php' );
                require_once( __DIR__ . '/widgets/places-slider.php' );
                require_once( __DIR__ . '/widgets/membership-package.php' );
                require_once( __DIR__ . '/widgets/featured-agency-developer.php' );
                require_once( __DIR__ . '/widgets/testimonial.php' );
                require_once( __DIR__ . '/widgets/google_map_property.php' );
                require_once( __DIR__ . '/widgets/list-items-agent.php' );
                require_once( __DIR__ . '/widgets/display_categories.php' );
                require_once( __DIR__ . '/widgets/list-agents.php' );
                require_once( __DIR__ . '/widgets/featured-agent.php' );
                require_once( __DIR__ . '/widgets/featured-article.php' ); 
                require_once( __DIR__ . '/widgets/featured-property.php' );
                require_once( __DIR__ . '/widgets/login-form.php' ); 
                require_once( __DIR__ . '/widgets/register-form.php' ); 
                require_once( __DIR__ . '/widgets/advanced-search.php' ); 
                require_once( __DIR__ . '/widgets/contact_us.php' );  
                require_once( __DIR__ . '/widgets/properties_slider.php' );  
                require_once( __DIR__ . '/widgets/full_map.php' );  
                require_once( __DIR__ . '/widgets/filter_list_properties.php' );  
                require_once( __DIR__ . '/widgets/wpestate_tabs.php' );  
                require_once( __DIR__ . '/widgets/wpestate_accordions.php' );  
   
                require_once( __DIR__ . '/widgets/property_page_tab_details.php' );  
                require_once( __DIR__ . '/widgets/property_page_accordion_details.php' ); 
                require_once( __DIR__ . '/widgets/property_page_simple_detail.php' ); 
                require_once( __DIR__ . '/widgets/property_page_simple_detail_section.php' ); 
                require_once( __DIR__ . '/widgets/property_page_slider_section.php' ); 
                require_once( __DIR__ . '/widgets/property_page_agent_card.php' ); 
                require_once( __DIR__ . '/widgets/property_page_agent_contact.php' ); 
                require_once( __DIR__ . '/widgets/property_page_related_listings.php' ); 
                require_once( __DIR__ . '/widgets/property_page_intext_details.php' );
                require_once( __DIR__ . '/widgets/property_page_design_gallery.php' );
                require_once( __DIR__ . '/widgets/property_page_agent_details_intext_details.php' );
                require_once( __DIR__ . '/widgets/propert_page_image_gallery_masonry.php' );  
                require_once( __DIR__ . '/widgets/propert_page_other_agents.php' );  
                require_once( __DIR__ . '/widgets/taxonomy_list.php' ); 
      
	}

	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Widgets files
		$this->include_widgets_files();

		// Register Widgets
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Recent_Items() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Recent_Items_SLider() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_ListItems_ByID() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Places_Slider() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Membership_Package() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Featured_Agency_Developer() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Testimonial() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Google_Map_Property() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_ListItems_Agent() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Display_Categories() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_List_Agents() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Featured_Agent() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Featured_Article() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Featured_Property() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Login_Form() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Register_Form() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Advanced_Search() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Contact_Us() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Properties_Slider() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Taxonomy_List() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Full_Map() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Filter_List_Properties() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Tabs() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Accordions() );
                
                    
                    
                  
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Image_Gallery_Masonry() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Tab_Details() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Accordion_Details() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Simple_Detail() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Detail_Section() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Slider_Section() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Agent_Card() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Agent_Contact() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Related_Listings() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Intext_Details() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Design_Gallery() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Agent_Details_Intext() );
                \Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\Wpresidence_Property_Page_Other_Agents());
               
                
              
                
                
        }

      
        
	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
        public function add_elementor_widget_categories($elements_manager){
            $elements_manager->add_category(
		'wpresidence',
		[
			'title' => __( 'WpResidence Widgets', 'residence-elementor' ),
			'icon' => 'fa fa-home',
		]
            );
            $elements_manager->add_category(
		'wpresidence_property',
		[
			'title' => __( 'WpResidence Property Page Widgets', 'residence-elementor' ),
			'icon' => 'fa fa-home',
		]
            );

        }
	public function __construct() {

		// Register widget scripts
		add_action( 'elementor/frontend/after_register_scripts', [ $this, 'widget_scripts' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );
                
                add_action( 'elementor/elements/categories_registered',  [ $this, 'add_elementor_widget_categories' ]  );
	}
}

// Instantiate Plugin Class
Plugin::instance();

function wpestate_prop_page_return_id(){
    return 26113;
}