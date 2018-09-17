<?php
// load theme textdomain for translation
add_action('after_setup_theme', 'corebc_setup');
function corebc_setup(){
    load_theme_textdomain(get_template_directory() . '/languages');
}

//Remove a barra de administração
add_action('after_setup_theme', 'remove_admin_bar');
 function remove_admin_bar() {
  show_admin_bar(false);
}

//Modifica a tela de login padrão do Wordpress
function modify_logo() {
    $logo_style = '<style type="text/css">';
    $logo_style .= 'h1 a {background-image: url(' . get_template_directory_uri() . '/assets/img/logo_branco.png) !important;}';
    $logo_style .= '</style>';
    echo $logo_style;
}
add_action('login_head', 'modify_logo');

function custom_login_url() {
    return '/';
}
add_filter('login_headerurl', 'custom_login_url');

function custom_login_css() {
    wp_enqueue_style('login-styles', get_template_directory_uri() . '/assets/css/custom-login.css');
}
add_action('login_enqueue_scripts', 'custom_login_css');


//redireciona o wp-admin
function redirect_admin( $redirect_to, $request, $user ){
    //is there a user to check?
    if ( isset( $user->roles ) && is_array( $user->roles ) ) {
        //check for admins
        if ( in_array( 'administrator', $user->roles ) ) {
            $redirect_to = esc_url(home_url('/')); // Your redirect URL
        }
    }
    return $redirect_to;
}
add_filter( 'login_redirect', 'redirect_admin', 10, 3 );
?>