<?php 
/*
Plugin Name: WP Copyright Plugin
Plugin URI: http://asiandatapledge.com
Description: This is Copyright Plugin
Version: 0.1
Author URI: https://www.facebook.com/engrmurad.info/
Author: Md.Murad Hosen
License: GPL2
Text Domain: ADP
*/
if(!defined('ABSPATH')) exit;

 function mcopyright_wp_footer()
{

 echo '<div class="container"> <div class="row">
 
 <div class="col-lg-6">
<h5> &copy; 2020 All Rights Reserved by Asian Data Pledge </h5>
 </div>
 <div class="col-lg-6">
 <h5> Design & Developed by Md.Murad Hosen&trade;</h5>
 </div>
 
 </div> </div>';

    
}

 add_action('wp_footer','mcopyright_wp_footer',99);

 function mcopyright_enqueue_scripts() {
    wp_enqueue_style( 'mcopyright-style', plugins_url( 'assets/css/bootstrap.min.css', __FILE__ ) );
}

add_action('wp_enqueue_scripts','mcopyright_enqueue_scripts');


add_action('admin_menu', 'copyright_plugin_setup_menu');
 
function copyright_plugin_setup_menu(){
    add_menu_page( 'Copyright Plugin Page', 'Copyright', 'manage_options', 'copyright-plugin', 'mcopyright_wp_footer' );
}
 
