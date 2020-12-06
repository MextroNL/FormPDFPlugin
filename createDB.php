<?php
/**
 * Created by PhpStorm.
 * User: Mextro
 * Date: 12/6/2020
 * Time: 4:46 PM
 */




    function createTables() {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();
        $table_name = $wpdb->prefix . 'wine_review';

        $sql = "CREATE TABLE $table_name (
                `proef_nr` int(10) NOT NULL AUTO_INCREMENT,
                `datum` date NOT NULL CURRENT_DATE ,
                `naam` varchar (32) NOT NULL,
                `email` varchar(32) NOT NULL,
                PRIMARY KEY (`proef_nr`)
                ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }


    function firstRow(){
        global $wpdb;
        $naam = 'JP';
        $email = 'max@grotekade.nl';

        $table_name = $wpdb->prefix . 'wine_review';

        $wpdb->insert(
            $table_name,
            array(
                'naam' => $naam,
                'email' => $email,
            )
        );
    }