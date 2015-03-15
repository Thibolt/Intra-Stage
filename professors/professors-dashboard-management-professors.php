<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard.php');
include ('professors-nav-sidebar-dashboard-management-professors.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-user"></span> Gestion des professeurs</h1>

<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Liste des professeurs existant</div>

<table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Login</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include ('../processing/Class/professors_class.php');
                $listProfessors = new Professors();
                $listProfessors ->DisplayListProfessors();
            ?>
            </tbody>
        </table>
</div>

</div>
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>