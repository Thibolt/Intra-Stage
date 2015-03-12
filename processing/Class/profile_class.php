<?php
/**
 * Created by PhpStorm.
 * User: thibault
 * Date: 11/03/15
 * Time: 21:46
 */

class Profile {

    public function DisplayProfile(){
        echo '
        <label for="new-password">Nom :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" id="professors_name" value="">
        </div>
        <br/>

        <label for="new-password">Prénom :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" id="professors_first_name" value="">
        </div>
        <br/>

        <label for="new-password">Email :</label>
        <div class="input-group">
            <span class="input-group-addon">@</span>
            <input type="text" class="form-control" id="professors_email" value="">
        </div>
        <br/>

        <label for="new-password">Login :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
            <input type="text" class="form-control" id="professors_login" value="">
        </div>
        ';
    }
}