<?php
/**
 * Plugin Name: Form Results PDF
 * Plugin URI: https://www.mextro.nl/plugins/form-pdf
 * Description: A wordpress plugin that adds in customizable forms through shortcodes that write to the database, can be displayed on the website and is convertible to PDF.
 * Version: 0.1
 * Author: Mextro
 * Author URI: https://www.mextro.nl
 */

//function input_field(){
//    return '<input class';
//}
//add_shortcode('input', 'input_field');


define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'createDB.php');

register_activation_hook( __FILE__, 'createTables' );
register_activation_hook( __FILE__, 'firstRow' );



//define ( 'FormPDFPlugin', __FILE__ );
//
//class FormPDF{
//
//    public function __construct()
//    {
//        RisiriWarehouseManagement::includes();
//        define( 'FormPDF', plugin_basename(
//            FormPDF ) );
//        ddefine('ROOTDIR', plugin_dir_path(__FILE__));
//
//        createDB::createTables();
//
//
//    }
//
//    public function includes()
//    {
//        require_once(ROOTDIR . 'classes/global/createDB.php');
//
//
//    }
//}
//
//
//$RisiriWarehouseManagement = new RisiriWarehouseManagement();
//?>
