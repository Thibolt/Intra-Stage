<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard.php');
include ('professors-nav-sidebar-dashboard-management-professors-delete.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-minus"></span> Supprimer un professeur</h1>
    <div class="alert alert-info">
        <p><span class="glyphicon glyphicon-info-sign"></span> Veuillez sélectionner l'utilisateur à supprimer.</p>   
    </div>
    <form name="" method="" action="">
        <div class="input-group">
            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
            <select class="form-control" id="professor-deleted" name="professor_deleted" required="">
                <option value="#"></option>
            </select>
        </div>

        <br/>

        <input type="hidden" id="date-time" name="date_time" value="#">

        <p class="center"><button class="btn btn-primary btn-lg btn-center" type="submit"><span class="glyphicon glyphicon-floppy-remove"></span> Supprimer</button></p>
    </form>
</div>
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>