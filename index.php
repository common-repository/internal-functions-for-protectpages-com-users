<?php
/*
Plugin Name: Internal functions for ProtectPages.com users
Description: Plugin is specially for protectpages.com users, to add the necessary functions in dashboard.
Version: 1.22
Text Domain: protectpages-com-functions
Domain Path: /languages
Author: ProtectPages.com
Author URI: http://www.protectpages.com/profile
Plugin URI: https://www.protectpages.com/web-coding-programming-software/our-wordpress-plugins/
Donate link: http://paypal.me/tazotodua
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

if (!defined('ABSPATH')) exit;  
add_action( 'admin_footer', function(){ echo '<!-- This plugin has transformed into library of shared functions & classes for all other ProtectPages.com plugins. Please see all dependant plugins at: https://profiles.wordpress.org/tazotodua/profile/#content-plugins -->'; } ); 

?>
