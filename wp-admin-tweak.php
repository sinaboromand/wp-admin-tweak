<?php
/*
 * Plugin Name: بهینه ساز ظاهر وردپرس
 * Description: این افزونه فونت های پنل ادمین را به ایران یکان تغییر میدهد و باعث خوانایی بیشترتمام بخش ها خواهدشد.
 * Version: 1.0
 * Author:سینابرومند
 * Author URI: http://sinaboromand.ir
 * Text Domain: sb-wpat
 */

if (!defined('ABSPATH')) { exit; }

/**
 *
 * Plugin basic defines
 *
 * @return void
 * @version 1.0
 * @since 1.0
 */
define("WPAT_DIR",    plugin_dir_path(__FILE__));
define("WPAT_URI",    plugin_dir_url(__FILE__));
define("WPAT_ASSETS", WPAT_URI.'assets/');

/**
 *
 * Plugin basic defines
 *
 * @return void
 * @version 1.0
 * @since 1.0
 */

add_action('admin_enqueue_scripts','wpat_assets');
function wpat_assets() {
    wp_enqueue_style('wpat-styles',WPAT_ASSETS.'/css/style.css');
}
