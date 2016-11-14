<?php

/*
   Plugin Name: Courtuald Custom Login
   Plugin URI: https://github.com/Courtauld/courtauld-custom-login
   Description: This plugin customises the login page according to the styles of the Courtauld websites.
   Version: 1.0
   Author: Jacob Charles Wilson
   Author URI: https://jclwilson.github.io
   License: GPL2
   */

// Custom link
function courtauld_url_login(){
	return get_bloginfo( 'url' ); // your URL here
}
add_filter('login_headerurl', 'courtauld_url_login');

// Custom logo
function login_css() {
	wp_enqueue_style( 'login_css', plugins_url('login.css', __FILE__));
}
add_action('login_enqueue_scripts', 'login_css');

// Custom Logo title
function courtauld_logo_url_title() {
    return get_bloginfo( 'title' );;
}
add_filter( 'login_headertitle', 'courtauld_logo_url_title' );

// Custom WordPress Footer
function remove_footer_admin () {

}
add_filter('admin_footer_text', 'remove_footer_admin');

// Remove visual error shake
function my_login_head() {
remove_action('login_head', 'wp_shake_js', 12);
}
add_action('login_head', 'my_login_head');

?>
