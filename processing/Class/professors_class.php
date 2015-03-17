<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 15/03/15
 * Time: 21:04
 */

class Professors {

    public function DisplayListProfessors(){

        include ('database_connection.php');
        $req = "SELECT professors_id, professors_name, professors_first_name, professors_email, professors_login FROM professors";
        $res = $connect->query($req);

        while ($row = $res->fetch(PDO::FETCH_ASSOC)){
            echo "
                <tr>
                    <td>".$row['professors_id']."</td>
                    <td>".$row['professors_name']."</td>
                    <td>".$row['professors_first_name']."</td>
                    <td>".$row['professors_login']."</td>
                    <td>".$row['professors_email']."</td>
                </tr>
                ";
        }
    }

    public function CreateProfessors(){
        session_name('intra-stage');
        session_start();
        include('database_connection.php');
        $name = $_POST['create_professorName'];
        $nameRegex = '/^[a-zA-Z -]+$/';
        $firstName = $_POST['create_professorFirstName'];
        $firstNameRegex = '/^[a-zA-Z -]+$/';
        $login = $_POST['create_professorLogin'];
        $loginRegex = '/^[a-z0-9]+$/';
        $email = $_POST['create_professorEmail'];
        $emailRegex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        $password = $_POST['create_professorPassword'];
        $confirmationPassword = $_POST['create_professorConfirmPassword'];
        $str = strlen($password);

        if (preg_match($nameRegex, $name) && preg_match($firstNameRegex, $firstName) && preg_match($loginRegex, $login) && preg_match($emailRegex, $email) && SHA1($password) == SHA1($confirmationPassword) && $str >= 4) {

            $updt = $connect->prepare("INSERT INTO professors (professors_id, professors_name, professors_first_name, professors_email, professors_login, professors_password) VALUES ('',:professorsName, :professorsFirstName, :professorsEmail, :professorsLogin, SHA1(:professorsPassword))");
            $updt->execute(array('professorsName' => $name, 'professorsFirstName' => $firstName,'professorsEmail' => $email, 'professorsLogin' => $login, 'professorsPassword' => $password));
            header('location: ../professors/professors-dashboard-management-professors.php');
        }
        else{
            echo "error";
        }
    }

    public function DisplayDeleteProfessors()
    {
        include('database_connection.php');
        $req = "SELECT professors_id, professors_name, professors_first_name FROM professors";
        $res = $connect->query($req);

        while ($row = $res->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="' . $row['professors_id'] . '">' . $row['professors_first_name'] . ' ' . $row['professors_name'] . '</option>';
        }
    }

    public function DeleteProfessors(){

    }
}//end of the class