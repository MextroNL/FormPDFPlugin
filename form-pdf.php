<?php
/**
 * Plugin Name: Form Results PDF
 * Plugin URI: https://www.mextro.nl/plugins/form-pdf
 * Description: A wordpress plugin that adds in customizable forms through shortcodes that write to the database, can be displayed on the website and is convertible to PDF.
 * Version: 0.1
 * Author: Mextro
 * Author URI: https://www.mextro.nl
 */

function input_field(){
    return '<input class';
}
add_shortcode('input', 'input_field');


define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'global/createDB.php');