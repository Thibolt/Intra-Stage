<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 16/02/15
 * Time: 15:42
 */

class Profile {

    function PrintProfileProfessor() {
        $req = "SELECT professors_id,
                professors_name,
                professors_first_name,
                professors_email,
                professors_login,
                professors_password
                FROM professors ";
    }
}