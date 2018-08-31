<?php


//Habilita o menus Widgets e Sidebars
function corebc_widgets_init() {


//Painéis para o Template Core-Desk 
    register_sidebar( array(
        'name'          => __( 'Desk Top Panel', 'corebc' ),
        'id'            => 'main-top-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Desk Left Panel', 'corebc' ),
        'id'            => 'main-left-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Desk Right Panel', 'corebc' ),
        'id'            => 'main-right-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

//Painéis para o Template Core-Acq
    register_sidebar( array(
        'name'          => __( 'Acq Top Panel', 'corebc' ),
        'id'            => 'acq-top-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Acq Left Panel', 'corebc' ),
        'id'            => 'acq-left-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Acq Right Panel', 'corebc' ),
        'id'            => 'acq-right-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );


//Painéis para o Template Core-Lib
    register_sidebar( array(
        'name'          => __( 'Librarian Top Panel', 'corebc' ),
        'id'            => 'lib-top-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Librarian Left Panel', 'corebc' ),
        'id'            => 'lib-left-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Librarian Right Panel', 'corebc' ),
        'id'            => 'lib-right-sidebar',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );




}
add_action( 'widgets_init', 'corebc_widgets_init' );


?>