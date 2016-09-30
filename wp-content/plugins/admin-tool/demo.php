<?php
/*
Plugin Name: WordPress admin demo
Description: 这是一个demo测试.
Author: wordpressdotorg
Author URI: http://wordpress.org/
Version: 0.6.3
Text Domain: wordpress-importer
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

//version constant
define("SP_VERSION", ".6");

define("SP_DIR", dirname(__FILE__));
require (WP_PLUGIN_DIR."/wp-async-task-master/wp-async-task.php");
require_once(SP_DIR . "/class/class.mydemo.php");			//misc functions used by the plugin
require_once(SP_DIR . "/class/class.asyndemo.php");			//misc functions used by the plugin

////激活插件后执行
//function sp_activation()
//{
//    add_action('init', array('MyMenuSetterUpper', 'demo'), 20);
//}
////register_activation_hook(__FILE__, 'sp_activation');
add_action('admin_menu', array('myMenu','instance'));
function my_api_status($api_url)
{
    sleep(5);
    add_option('gjgtest',$api_url);
}
add_action('wp_async_api_status', 'my_api_status');
function add_to_post($url){
    add_option('postgjg',$url);
}
add_action('save_post','add_to_post');
function my_init_api_status()
{
    new JPB_Async_Task();
    do_action('api_status', 'www.baidu.com');
}
add_action('plugins_loaded', 'my_init_api_status');
//$a = $obj::record('test here');
//die;

