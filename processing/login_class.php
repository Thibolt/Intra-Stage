<?php

include ('database-connection.php');
include ('config.cfg');

class Login {

    private $_requestConnectionProfessors = "SELECT * FROM professors WHERE professors_login=? AND professors_password= SHA1(?)";

// Professors anthentification
    public function professorsLogin() {
        $professorsPostLogin = $_POST['professors_login'];
        $professorsPostPassword = $_POST['professors_password'];

        if (isset($professorsPostLogin) && isset($professorsPostPassword)) {
            include ('./database-connection.php');
            $connectionMysql = $connect->prepare($this->_requestConnectionProfessors);
            $connectionMysql->execute(array($professorsPostLogin,
                $professorsPostPassword
            ));

            if ($row = $connectionMysql->fetch(PDO::FETCH_ASSOC)) {
                //recognized user --> session open
                session_name('intra-stage');
                session_start();

                // saving parameters of our user as session variables
                $_SESSION['professors_login'] = $professorsPostLogin;
                $_SESSION['professors_password'] = $professorsPostPassword;

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

    public function professorsDeconnection() {
        //ouverture de la session
        session_name('intra-stage');
        session_start();

        // On détruit les variables de notre session
        session_unset();

        // On détruit notre session
        session_destroy();

        // On redirige le visiteur vers la page d'accueil
        header('location: ' . $_SERVER["HOST_SERVER"] . '/documents/Intra-Stage');
    }

//authentification students
//Only with LDAP
    public function studentsLogin($param) {
        
    }

    public function controlSession() {
        if ((!isset($_SESSION['professors_login'])) || ($_SESSION['professors_password'] == '')) {
            // The variable $ _SESSION ['professors_login'] does not exist or it is empty
            // <=> the person did NOT connected	
            header('location: ' . $_SERVER["HOST_SERVER"] . '/documents/Intra-Stage');
            exit();
        }
    }

}
