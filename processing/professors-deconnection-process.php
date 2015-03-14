<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 11/03/15
 * Time: 19:59
 */

include ('./Class/login_class.php');

$processConnectionProfessors = new Login();
$processConnectionProfessors -> LogoutProfessors();