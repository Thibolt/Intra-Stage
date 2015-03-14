<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard-account-settings.php');
include ('professors-nav-sidebar-dashboard-account-settings.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-edit"></span> Modifier mon compte</h1>
    <form method="POST" action="../processing/professors-modify-profile-process.php">
    <?php
include ('../processing/Class/profile_class.php');
$displayAccountParameters=new Profile();
$displayAccountParameters -> DisplayModifyProfile();
?>

        <br/>
        
        <p class="center"><button class="btn btn-lg btn-primary btn-center" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
    </form>
</div>
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>