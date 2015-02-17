<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard.php');
include ('professors-nav-sidebar-dashboard-management-professors-modify.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-edit"></span> Modifier un professeur</h1>
    <form name="" action="">
        <label for="modify-professorName">Nom :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input class="form-control force-capital" type="text" id="modify-professorName" name="modify_professorName" placeholder="" value="#" required="">
        </div>

        <br/>

        <label for="modify-professorFirstName">Prénom :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input class="form-control" type="text" id="modify-professorFirstName" name="modify_professorFirstName" placeholder="" value="#" required="">
        </div>

        <br/>

        <label for="modify-professorLogin">Login :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <input class="form-control" type="text" id="modify-professorLogin" name="modify_professorLogin" placeholder="" value="#" required="">
        </div>

        <br/>

        <label for="modify-professorEmail">Email :</label>
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
            <input class="form-control" type="text" id="modify-professorEmail" name="modify_professorEmail" placeholder="" value="#" required="">
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