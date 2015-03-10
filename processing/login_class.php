<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 10/03/15
 * Time: 21:34
 */

include ('database_connection.php');
include ('config.cfg');

class Login {

    private $_requestConnectionProfessors = "SELECT * FROM professors WHERE professors_login=? AND professors_password= SHA1(?)";

    //Professors authentification
    public function loginProfessors (){
        $postLoginProfessors = $_POST['professors_login'];
        $postPasswordProfessors = $_POST['professors_password'];

        if (isset($postLoginProfessors) && isset($postPasswordProfessors)) {
            include ('./database-connection.php');
            $connectionMysql = $connect->prepare($this->_requestConnectionProfessors);
            $connectionMysql->execute(array($postLoginProfessors,
                $postPasswordProfessors
            ));

            if ($row = $connectionMysql->fetch(PDO::FETCH_ASSOC)) {
                //recognized user --> session open
                session_name('intra-stage');
                session_start();

                // saving parameters of our user as session variables
                $_SESSION['professors_login'] = $postLoginProfessors;
                $_SESSION['professors_password'] = $postPasswordProfessors;

                $professorsSessionLogin = $_SESSION['professors_login'];

                // redirection to the members page
                header('location: ../professors/professors-dashboard.php?utilisateur=' . $professorsSessionLogin);

                // closin results cursor
                $connectionMysql->closeCursor();

                //closing the connection with the destruction of the object
                unset($connect);
            } else {
                //unrecognized identifier
                echo '<meta charset="utf-8"><body onLoad="alert(\'Identifiant ou mot de passe incorrect !\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
            }
        }
    }
}