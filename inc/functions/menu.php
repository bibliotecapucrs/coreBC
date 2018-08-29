<?php

//Habilita e adiciona menus ao tema
function register_corebc_menu() {
  register_nav_menus(

//é possível criar vários menus para uso em diversas partes do tema.
    array(
      'header-menu' => __( 'Top Menu' ),
      'left-menu' => __( 'Left Menu' )
     )
   );
 }

 add_action( 'init', 'register_corebc_menu' );


//Campo Ícone do menu

require_once(get_template_directory() . '/inc/classes/Hooks/edit_custom_walker.php');
class rc_sweet_custom_menu {

    /*--------------------------------------------*
     * Constructor
     *--------------------------------------------*/

    /* All functions will be placed here */
    function rc_scm_add_custom_nav_fields( $menu_item ) 
    {
        $menu_item->icon = get_post_meta( $menu_item->ID, '_menu_item_icon', true );
        return $menu_item;
    }

function rc_scm_update_custom_nav_fields( $menu_id, $menu_item_db_id, $args ) {

    // Check if element is properly sent
    if ( is_array( $_REQUEST['menu-item-icon']) ) {
        $subtitle_value = $_REQUEST['menu-item-icon'][$menu_item_db_id];
        update_post_meta( $menu_item_db_id, '_menu_item_icon', $subtitle_value );
    }

}
    /**
     * Initializes the plugin by setting localization, filters, and administration functions.
     */
    function __construct() {
         // add custom menu fields to menu
        add_filter( 'wp_setup_nav_menu_item', array( $this, 'rc_scm_add_custom_nav_fields' ) );
        // save menu custom fields
        add_action( 'wp_update_nav_menu_item', array( $this, 'rc_scm_update_custom_nav_fields'), 10, 3 );
        // edit menu walker
        add_filter( 'wp_edit_nav_menu_walker', array( $this, 'rc_scm_edit_walker'), 10, 2 );
    } // end constructor


    /**
     * Define new Walker edit
     *
     * @access      public
     * @since       1.0 
     * @return      void
    */
    function rc_scm_edit_walker($walker,$menu_id) {
    
        return 'Walker_Nav_Menu_Edit_Custom';
    }
}

// instantiate plugin's class
$GLOBALS['sweet_custom_menu'] = new rc_sweet_custom_menu();

 ?>