<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 11/03/15
 * Time: 21:39
 */

class Dashboard {
    //Display the username in the navbar-fixed
    public function userDisplay() {
        $professorConnected = $_SESSION['professors_login'];
        echo $professorConnected;
    }
}