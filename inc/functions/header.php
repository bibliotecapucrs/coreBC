<?php

//Logotipo customizável
add_theme_support( 'custom-logo' );

//Habilita o menu "Cabeçalho"
add_theme_support( 'custom-header' );

function corebc_custom_header_setup() {
$args = array(
        // Default Header Image to display
        'default-image'         => get_template_directory_uri() . '/assets/img/headers/default.jpg',
        // Display the header text along with the image
        'header-text'           => false,
        // Header text color default
        'default-text-color'        => '000',
        // Header image width (in pixels)
        'width'             => 2000,
        // Header image height (in pixels)
        'height'            => 60,
        // Header image random rotation default
        'random-default'        => false,
        // Enable upload of image file in admin 
        'uploads'       => false,
        //  function to be called in preview page head section
        'admin-head-callback'       => 'adminhead_cb',
        // function to produce preview markup in the admin screen
        'admin-preview-callback'    => 'adminpreview_cb',
);
add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'corebc_custom_header_setup' );

?>