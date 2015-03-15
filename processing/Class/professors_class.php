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
            echo "<tr>
                    <td>".$row['professors_id']."</td>
                    <td>".$row['professors_name']."</td>
                    <td>".$row['professors_first_name']."</td>
                    <td>".$row['professors_login']."</td>
                    <td>".$row['professors_email']."</td>
                </tr>
            ";
        }
    }
}