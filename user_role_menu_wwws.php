<?php

/**
Plugin Name: User Role Menu for WordPress 
Plugin URI: http://www.worldwidewebsolution.com
Description: Define Custom Menus based on User Roles in WordPress. This plugin easily lets you manage your menu for users according to their roles.
Version: 1.0
Author: Worldwideweb Solution
Author URI: http://www.worldwidewebsolution.com
 **/

define('wwws_version','1.0.2'); 
define('wwws_path', plugin_dir_path(__FILE__) ); 
define("wwws_url", plugin_dir_url(__FILE__) );  

global $wp_version;


if(!class_exists('plugin_wwws')){
	if( $wp_version < 3.5 ){
		require_once wwws_path.'includes/preclass.wwws.php';	
	}else{
		require_once wwws_path.'includes/class.wwws.php';
	}
}

global $wwws_plugin;
$wwws_plugin = new plugin_wwws();
?>