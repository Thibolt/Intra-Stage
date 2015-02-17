<?php

/* * **********************
 *                      *
 *  PDO CONNECTION      * 
 *                      *
 * ********************* */

/* * **   database connection  *** */
include ('config.cfg');
try {
    $connect = new PDO("mysql:host=$host;dbname=$database", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
}
