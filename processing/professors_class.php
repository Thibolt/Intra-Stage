<?php

Class Professors
{
    /*     * **user display *** */

    public function userDisplay()
    {
        $professorConnected = $_SESSION['professors_login'];
        echo $professorConnected;
    }

    /*     * **control of session*** */

    public function controlSession()
    {
        if ((!isset($_SESSION['professors_login'])) || ($_SESSION['professors_password'] == '')) {
            // La variable $_SESSION['identifiant'] n'existe pas, ou bien elle est vide
            // <=> la personne ne s'est PAS connectée	
            header('location: ' . $_SERVER["HOST_SERVER"] . '/documents/Intra-stage-2.1.1/public_html/index.php');
            exit();
        }
    }

    /*     * *Display -> Mon Profil** */

    private $_mysqlRequest = 'SELECT professors_name, professors_first_name, professors_email, professors_login FROM professors WHERE professors_login =\'';

    public function displayMonProfil()
    {
        include('../processing/database-connection.php');
        $connectionMysql = $connect->query($this->_mysqlRequest . $_SESSION['professors_login'] . '\'');

        while ($row = $connectionMysql->fetch(PDO::FETCH_ASSOC)) {
            echo '
        <label>Nom :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <p class="form-control">' . $row['professors_name'] . '</p>
        </div>
        
        <br/>
        <label>Prénom :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <p class="form-control">' . $row['professors_first_name'] . ' </p>
        </div>
        
        <br/>
        <label>Login :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <p class="form-control">' . $row['professors_login'] . '</p>
        </div>
        
        <br/>
        <label>E-mail :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <p class="form-control">' . $row['professors_email'] . '</p>
        </div>';
        }
    }

    /*     * **update profile** */

    public function updateMyProfile()
    { //fonction de mise a jour de profil
        include('../session/session-start.php');
        include('../../config/connexion-bdd.php');
        $nom = $_POST['nom'];
        $regexNom = '/^[a-zA-Z -]+$/';
        $prenom = $_POST['prenom'];
        $regexPrenom = '/^[a-zA-Z -]+$/';
        $email = $_POST['email'];
        $regexEmail = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $identifiant = $_POST['identifiant'];
        $regexIdentidiant = '/^[a-z0-9]+$/';
        $utilisateurConnecte = $_POST['utilisateur-connecte'];

        $req = 'SELECT nom, prenom, email, identifiant FROM utilisateurs WHERE identifiant="' . $utilisateurConnecte . '"';
        $res = $connect->query($req);

        if ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            if (preg_match($regexNom, $nom) &&
                preg_match($regexPrenom, $prenom) &&
                preg_match($regexEmail, $email) &&
                preg_match($regexIdentidiant, $identifiant)
            ) {
                if ($nom <> $row['nom']) {

                    $casseNom = strtoupper($nom);
                    echo $casseNom . ' est different de ' . $row['nom'];
                    $updt = $connect->prepare('UPDATE utilisateurs SET nom = :nom WHERE identifiant=:identifiant');
                    $updt->execute(array(
                        'nom' => $casseNom,
                        'identifiant' => $utilisateurConnecte
                    ));
                } else if ($prenom <> $row['prenom']) {
                    $updt = $connect->prepare('UPDATE utilisateurs SET prenom = :prenom WHERE identifiant=:identifiant');
                    $updt->execute(array(
                        'prenom' => $prenom,
                        'identifiant' => $utilisateurConnecte
                    ));
                } else if ($email <> $row['email']) {
                    $updt = $connect->prepare('UPDATE utilisateurs SET email = :email WHERE identifiant=:identifiant');
                    $updt->execute(array(
                        'email' => $email,
                        'identifiant' => $utilisateurConnecte
                    ));
                } else {
                    $updt = $connect->prepare('UPDATE utilisateurs SET identifiant = :identifiant WHERE identifiant=:old_identifiant');
                    $updt->execute(array(
                        'identifiant' => $identifiant,
                        'old_identifiant' => $utilisateurConnecte
                    ));
                    $_SESSION['identifiant'] = $_POST['identifiant'];
                }
                echo '<meta charset="utf-8"><body onLoad="alert(\'Le mot de passe à bien été changé\')">';
                echo '<meta http-equiv="refresh" content="0;URL=profile.php">';
            } else {
                echo 'error';
            }
        }
    }
}
?>