<?php

/* * **   deconnection  *** */

Class ProfessorsDeconnection {

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

}







/****update profile***/

Class UpdateMyProfile {
    
    
    public function updateMyProfile (){ //fonction de mise a jour de profil
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
    $utilisateurConnecte=$_POST['utilisateur-connecte'];

    $req = 'SELECT nom, prenom, email, identifiant FROM utilisateurs WHERE identifiant="'.$utilisateurConnecte.'"';
    $res= $connect->query($req);
  
    if ($row = $res->fetch(PDO::FETCH_ASSOC)){
        if(preg_match($regexNom, $nom) && 
            preg_match($regexPrenom, $prenom) && 
            preg_match($regexEmail,$email) && 
            preg_match($regexIdentidiant, $identifiant))
            {
                if ($nom <> $row['nom'])
                    {
                    
                        $casseNom = strtoupper($nom);
                        echo $casseNom.' est different de '.$row['nom'];
                        $updt=$connect->prepare('UPDATE utilisateurs SET nom = :nom WHERE identifiant=:identifiant');
                        $updt->execute(array(
                        'nom'=>$casseNom,
                        'identifiant'=>$utilisateurConnecte
                        ));
                    }
                else if ($prenom <> $row['prenom'])
                    {
                        $updt=$connect->prepare('UPDATE utilisateurs SET prenom = :prenom WHERE identifiant=:identifiant');
                        $updt->execute(array(
                        'prenom'=>$prenom,
                        'identifiant'=>$utilisateurConnecte
                        ));
                    }
                else if ($email <> $row['email']) 
                    {
                        $updt = $connect->prepare('UPDATE utilisateurs SET email = :email WHERE identifiant=:identifiant');
                        $updt->execute(array(
                        'email' => $email,
                        'identifiant' => $utilisateurConnecte
                        ));
                    } 
                else 
                    {
                        $updt=$connect->prepare('UPDATE utilisateurs SET identifiant = :identifiant WHERE identifiant=:old_identifiant');
                        $updt->execute(array(
                        'identifiant'=>$identifiant,
                        'old_identifiant'=>$utilisateurConnecte
                        ));
                        $_SESSION['identifiant'] = $_POST['identifiant']; 
                        
                    }
                echo '<meta charset="utf-8"><body onLoad="alert(\'Le mot de passe à bien été changé\')">';
                echo '<meta http-equiv="refresh" content="0;URL=profile.php">';
            }
        else
            {
                echo 'error';
            }
    }

}
}

?>