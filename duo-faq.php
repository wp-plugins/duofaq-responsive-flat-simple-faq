<?php
/*
Plugin Name: duoFAQ - Responsive, Flat, Simple FAQ
Plugin URI: http://duogeek.com
Description: A responsive and lightweight FAQ (Frequently Asked Questions) plugin by duogeek
Version: 1.0
Author: duogeek
Author URI: http://duogeek.com
License: GPL v2 or later
*/

if ( ! defined( 'ABSPATH' ) ) wp_die( __( 'Sorry hackers! This is not your place!', 'df' ) );

if( ! defined( 'DF_VERSION' ) ) define( 'DF_VERSION', '1.0' );
if( ! defined( 'DF_PLUGIN_DIR' ) ) define( 'DF_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
if( ! defined( 'DF_FILES_DIR' ) ) define( 'DF_FILES_DIR', DF_PLUGIN_DIR . 'duo-faq-files' );
if( ! defined( 'DF_PLUGIN_URI' ) ) define( 'DF_PLUGIN_URI', plugins_url() );
if( ! defined( 'DF_FILES_URI' ) ) define( 'DF_FILES_URI', DF_PLUGIN_URI . '/duo-faq/duo-faq-files' );
if( ! defined( 'DF_CLASSES_DIR' ) ) define( 'DF_CLASSES_DIR', DF_FILES_DIR . '/classes' );
if( ! defined( 'DF_ADDONS_DIR' ) ) define( 'DF_ADDONS_DIR', DF_FILES_DIR . '/addons' );
if( ! defined( 'DF_INCLUDES_DIR' ) ) define( 'DF_INCLUDES_DIR', DF_FILES_DIR . '/includes' );

if( ! defined( 'DUO_FAQ_MENU_POSITION' ) ) define( 'DUO_FAQ_MENU_POSITION', '37' );

$jquery_themes = apply_filters( 'df_jqueryui_themes', array( "UI lightness", "UI darkness", "Smoothness", "Start", "Redmond", "Sunny", "Overcast", "Le Frog", "Flick", "Pepper Grinder", "Eggplant", "Dark Hive", "Cupertino", "South Street", "Blitzer", "Humanity", "Hot Sneaks", "Excite Bike", "Vader", "Dot Luv", "Mint Choc", "Black Tie", "Trontastic", "Swanky Purse" ) );

$custom_themes = apply_filters( 'df_custom_themes', array( 'alizerin', 'amethyst', 'asbestos', 'belize-hole', 'carrot', 'concrete', 'emerland', 'green-sea', 'midnight-blue', 'nephritis', 'orange', 'peter-river', 'pomegranate', 'pumpkin', 'sunflower', 'turquoise', 'wet-asphalt', 'wisteria' ) );

require_once DF_FILES_DIR . '/helper.php';
require_once DF_CLASSES_DIR . '/class.customPostType.php';
require_once DF_CLASSES_DIR . '/class.faq.php';


add_action( 'init','duo_faq_localization' );
function duo_faq_localization() {
    load_plugin_textdomain( 'df', FALSE, DF_PLUGIN_DIR . '/lang/' );
}

