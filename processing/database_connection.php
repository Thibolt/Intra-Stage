<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 10/03/15
 * Time: 21:48
 */

/**
 * PDO Conection
 * database connection
 */

include ('config.cfg');

try {
    $connect = new PDO("mysql:host=$host;dbname=$database", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br />';
    echo 'N° : ' . $e->getCode();
}