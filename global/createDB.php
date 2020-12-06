<?php
/**
 * Created by PhpStorm.
 * User: Mextro
 * Date: 12/6/2020
 * Time: 4:46 PM
 */



class createDB{
    function createTables() {
        global $wpdb;
        $charset_collate = $wpdb->get_charset_collate();

        $sql =
            "CREATE TABLE 'wine_review' (
                `proef_nr` int(10) NOT NULL AUTO_INCREMENT,
                `datum` date NOT NULL,
                `Artikelnummer` int(10) NOT NULL,
                `uitleenDatum` date NOT NULL,
                `inleverDatum` date NOT NULL,
                `ingeleverd` int(1) NOT NULL,
                PRIMARY KEY (`uitleenNummer`)
                ) $charset_collate;";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    }
}


CREATE TABLE `risiri_uitleningen` (
`uitleenNummer` int(10) NOT NULL AUTO_INCREMENT,
                 `Klantnummer` int(10) NOT NULL,
                 `Artikelnummer` int(10) NOT NULL,
                 `uitleenDatum` date NOT NULL,
                 `inleverDatum` date NOT NULL,
                 `ingeleverd` int(1) NOT NULL,
                 PRIMARY KEY (`uitleenNummer`)
                ) ENGINE=InnoDB DEFAULT CHARSET=$charset_collate";
