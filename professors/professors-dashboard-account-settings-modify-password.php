<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard-account-settings.php');
include ('professors-nav-sidebar-dashboard-account-settings-modify-password.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-lock"></span> Modifier mon mot de passe</h1>
    <div class="alert alert-info">
        <p><span class="glyphicon glyphicon-info-sign"></span> Votre mot de passe doit comporter au minimum quatre caractères !</p>
    </div>
    <form name="" action="">
        <label for="old-password">Ancien mot de passe :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input class="form-control" type="password" id="old-password" name="old_password" placeholder="" required="">
        </div>

        <br/>

        <label for="new-password">Nouveau mot de passe :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input class="form-control" type="password" id="new-password" name="new_password" placeholder="" required="">
        </div>

        <br/>

        <label for="confirm-newPassword">Confirmer le nouveau mot de passe :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
            <input class="form-control" type="password" id="confirm-newPassword" name="confirm_newPassword" placeholder="" required="">
        </div>

        <br/>

        <p class="center"><button class="btn btn-lg btn-primary btn-center" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
    </form>
</div>
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>