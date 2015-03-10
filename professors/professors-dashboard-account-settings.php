<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard-account-settings.php');
include ('professors-nav-sidebar-dashboard-account-settings.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-wrench"></span> Compte</h1>
        <?php
        $myProfilTable = new DisplayMonProfil();
        ?>
</div>
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>