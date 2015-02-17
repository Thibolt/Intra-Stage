<?php

Class Dashboard {

    public function userDisplay() {
        $professorConnected = $_SESSION['professors_login'];
        echo $professorConnected;
    }

}
