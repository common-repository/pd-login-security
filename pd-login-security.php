<?php
/*
* Plugin Name: PD Login Security
* Plugin URI:  https://www.tovernaar.nl/plugins
* Description: A small plugin to further secure your login
* Version:     1.0.4
* Author:      Pieter Daalder
* Author URI:  https://www.tovernaar.nl/about
* Text Domain: pd-login-security
* Domain Path: /languages
*/

/*
 * Load textdomain for this plugin
 */

function pdls_load_textdomain() {
    load_plugin_textdomain( 'pd-login-security', false, dirname( plugin_basename( __FILE__ ) ) .'/languages' );
    }
add_action( 'plugins_loaded', 'pdls_load_textdomain' );



function pdls_suppress_login(){
    return __( 'Whoops! Something went definately wrong there!', 'pd-login-security');
}

add_filter( 'login_errors', 'pdls_suppress_login');

?>
