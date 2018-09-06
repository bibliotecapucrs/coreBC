<?php

/**
 * Plugin Name: Disable Default Avatars
 * Plugin URI: http://wordpress.stackexchange.com/questions/17413
 * Description: To be used alongside <a href="http://www.get10up.com/plugins/simple-local-avatars-wordpress/">Simple Local Avatars</a>, disabling all default avatars and falling back to a single image. Use the filter <code>local_default_avatar</code> to set the path of the image.
 * Version: 1.0
 * Author: TheDeadMedic
 * Author URI: http://wordpress.stackexchange.com/users/1685/thedeadmedic
 */

////if ( !function_exists( 'get_avatar' ) ) :
/**
 * Retrieve the avatar for a user who provided a user ID or email address.
 *
 * @since 2.5
 * @param int|string|object $id_or_email A user ID,  email address, or comment object
 * @param int $size Size of the avatar image
 * @param string $default URL to a default image to use if no avatar is available
 * @param string $alt Alternate text to use in image tag. Defaults to blank
 * @return string <img> tag for the user's avatar
 *
 * 
*/

/*
function get_avatar( $id_or_email, $size = '96', $default = '', $alt = false ) {
    if ( ! get_option('show_avatars') )
        return false;

    static $default_url; // use static vars for a little caching
    if ( !isset( $default_url ) )
        $default_url = apply_filters( 'local_default_avatar', get_template_directory_uri() . '/assets/img/admin.jpg' );

    if ( false === $alt)
        $safe_alt = '';
    else
        $safe_alt = esc_attr( $alt );

    if ( !is_numeric( $size ) )
        $size = '96';

    $avatar = "<img alt='{$safe_alt}' src='{$default_url}' class='avatar avatar-{$size} photo avatar-default' height='{$size}' width='{$size}' />";
    return apply_filters( 'get_avatar', $avatar, $id_or_email, $size, $default, $alt );
}
endif;

function __limit_default_avatars_setting( $default )
{
    return 'local_default';
}
add_filter( 'pre_option_avatar_default', '__limit_default_avatars_setting' );

if ( is_admin() ) :
function __limit_default_avatars( $defaults )
{
    return array( 'local_default' => get_bloginfo( 'name' ) . ' Default' );
}
add_filter( 'avatar_defaults', '__limit_default_avatars' );
endif;
*/

?>