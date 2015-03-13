<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 11/03/15
 * Time: 21:46
 */

class Profile {


    public function DisplayProfile(){
        include ('database_connection.php');
        $sessionProfessors=$_SESSION['professors_login'];

        $requestProfileProfessors = "SELECT `professors_name`, `professors_first_name`, `professors_email`, `professors_login` FROM professors WHERE professors_login LIKE '".$sessionProfessors."'";

        $connectionMysql = $connect->query($requestProfileProfessors);

        if ($row = $connectionMysql->fetch(PDO::FETCH_ASSOC)) {
            echo '
                    <label for="new-password">Nom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <p type="text" class="form-control" id="professors_name">'.$row[professors_name].'</p>
                    </div>
                    <br/>

                    <label for="new-password">Prénom :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <p type="text" class="form-control" id="professors_first_name">'.$row[professors_first_name].'</p>
                    </div>
                    <br/>

                    <label for="new-password">Email :</label>
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <p type="text" class="form-control" id="professors_email">'.$row[professors_email].'</p>
                    </div>
                    <br/>

                    <label for="new-password">Login :</label>
                    <div class="input-group">
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                        <p type="text" class="form-control" id="professors_login">'.$row[professors_login].'</p>
                    </div>
                ';
        } else {

        }
    }
}