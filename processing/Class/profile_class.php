<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 11/03/15
 * Time: 21:46
 */

class Profile
{

    public function DisplayModifyProfile()
    {
        include('database_connection.php');
        $sessionProfessors = $_SESSION['professors_login'];

        $requestProfileProfessors = "SELECT `professors_id`, `professors_name`, `professors_first_name`, `professors_email`, `professors_login` FROM professors WHERE professors_login LIKE '" . $sessionProfessors . "'";

        $connectionMysql = $connect->query($requestProfileProfessors);

        if ($row = $connectionMysql->fetch(PDO::FETCH_ASSOC)) {
            echo '
                    <label for="professors_name">Nom :</label>
                    <div class="input-group ">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" name="name" id="professors_name" value="' . $row[professors_name] . '">
                    </div>
                    <br/>

                    <label for="professors_first_name">Prénom :</label>
                    <div class="input-group ">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" name="firstName" id="professors_first_name" value="' . $row[professors_first_name] . '">
                    </div>
                    <br/>

                    <label for="professors_email">Email :</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" name="email" id="professors_email" value="' . $row[professors_email] . '">
                    </div>
                    <br/>

                    <label for="professors_login">Login :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <input type="text" class="form-control" name="login" id="professors_login" value="' . $row[professors_login] . '">
                    </div>
                        <input type="hidden" class="form-control" name="sessionName" id="professors_session" value="' . $sessionProfessors . '">
                        <input type="hidden" class="form-control" name="professorsId" id="professors_id" value="' . $row[professors_id] . '">
                ';
        } else {

        }
    }

    public function ModifyProfile()
    {
        session_name('intra-stage');
        session_start();
        include('database_connection.php');
        $id = $_POST['professorsId'];
        $idRegex = '/^[0-9]+$/';
        $name = $_POST['name'];
        $nameRegex = '/^[a-zA-Z -]+$/';
        $firstName = $_POST['firstName'];
        $firstNameRegex = '/^[a-zA-Z -]+$/';
        $email = $_POST['email'];
        $emailRegex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $login = $_POST['login'];
        $loginRegex = '/^[a-z0-9]+$/';
        $sessionProfessors = $_SESSION['professors_login'];
        $onlineSession = $_POST['sessionName'];

        $req = "SELECT professors_name, professors_first_name, professors_email, professors_login FROM professors WHERE professors_login LIKE '" . $sessionProfessors . "' AND professors_id LIKE '" . $id . "'";
        $res = $connect->query($req);

        if ($row = $res->fetch(PDO::FETCH_ASSOC)) {

            if (preg_match($idRegex, $id) && preg_match($nameRegex, $name) && preg_match($firstNameRegex, $firstName)
                && preg_match($emailRegex, $email) && preg_match($loginRegex, $login)
            ) {
                if ($name <> $row['professors_name']) {
                    $updt = $connect->prepare('UPDATE professors SET professors_name = :nameProfessors WHERE professors_login = :onlineProfessors');
                    $updt->execute(array('nameProfessors' => $name, 'onlineProfessors' => $onlineSession));
                } elseif ($firstName <> $row['professors_first_name']) {
                    $updt = $connect->prepare('UPDATE professors SET professors_first_name = :firstNameProfessors WHERE professors_login = :onlineProfessors');
                    $updt->execute(array('firstNameProfessors' => $firstName, 'onlineProfessors' => $onlineSession));
                } elseif ($email <> $row['professors_email']) {
                    $updt = $connect->prepare('UPDATE professors SET professors_email = :emailProfessors WHERE professors_login = :onlineProfessors');
                    $updt->execute(array('emailProfessors' => $email, 'onlineProfessors' => $onlineSession));
                } else {
                    $updt = $connect->prepare('UPDATE professors SET professors_login = :loginProfessors WHERE professors_login = :onlineProfessors');
                    $updt->execute(array('loginProfessors' => $login, 'onlineProfessors' => $onlineSession));
                    $_SESSION['professors_login'] = $login;
                }
                header('location: ../professors/professors-dashboard-account-settings.php');
            } else {
                echo "error";
            }
        }
    }

    public function ModifyPassword()
    {
        session_name('intra-stage');
        session_start();
        include('database_connection.php');
        $currentPassword = SHA1($_POST['old_password']);
        $newPassword = SHA1($_POST['new_password']);
        $confirmationNewPassword = SHA1($_POST['confirm_newPassword']);
        $sessionProfessors = $_SESSION['professors_login'];
        $str = strlen($newPassword);

        $req = "SELECT professors_login, professors_password FROM professors WHERE professors_login LIKE '" . $sessionProfessors . "'";
        $res = $connect->query($req);

        if ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            if ($row['professors_login'] == $sessionProfessors && $row['professors_password'] == $currentPassword && $newPassword == $confirmationNewPassword && $currentPassword <> $newPassword) {
                if ($str >= 4) {
                    $updt = $connect->prepare('UPDATE professors SET professors_password=:password WHERE professors_login=:login');
                    $updt->execute(array('password' => $confirmationNewPassword, 'login' => $sessionProfessors));
                    echo '<meta charset="utf-8"><body onLoad="alert(\'Le mot de passe à bien été changé\')">';
                    echo '<meta http-equiv="refresh" content="0;URL=../professors/professors-dashboard-account-settings-modify-password.php">';

                } else {
                    echo '<meta charset="utf-8"><body onLoad="alert(\'le mot de passe doit comporter au minimum 4 caractères !\')">';
                    echo '<meta http-equiv="refresh" content="0;URL=../professors/professors-dashboard-account-settings-modify-password.php">';
                }
            } else {
                echo '<meta charset="utf-8"><body onLoad="alert(\'Le changement n\'a pas pu être effectué, veuillez retenter l\opération\')">';
                echo '<meta http-equiv="refresh" content="0;URL=../professors/professors-dashboard-account-settings-modify-password.php">';
            }
        } else {
            // formulaire non rempli
            echo '<meta charset="utf-8"><body onLoad="alert(\'Une erreur à été détecté, veuillez resaisir le formulaire de changement de mot de passe\')">';
            echo '<meta http-equiv="refresh" content="0;URL=../professors/professors-dashboard-account-settings-modify-password.php">';
        }

    }
}//end of the class