<?php
include ('professors-header.php');
include ('professors-navbar-fixed-dashboard.php');
include ('professors-nav-sidebar-dashboard-management-students-modify.php');
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"><span class="glyphicon glyphicon-user"></span>Modifier la liste des étudiant</h1>
    <div class="alert alert-danger">
        <p><span class="glyphicon glyphicon-warning-sign"></span> Afin que l'importation de la liste s'effectue avec succès, il est recommandé de télécharger le fichier CSV de base et de l'utiliser pour l'importation !</p>
        <p class="center"><a class="btn btn-danger btn-sm" href="../resources/template_list_students.csv" role="button"><span class="glyphicon glyphicon-download-alt"></span> Télécharger le fichier CSV de base</a></p>
    </div>
    <form name="" method="" action="" enctype="multipart/form-data">
        <label for="list-csv-fileUpload">fichier CSV :</label>
        <input type="file" id="list-csv-fileUpload" name="list-csv_fileUpload" placeholder="" required="">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
        <p style="text-align: center;"><button class="btn btn-primary btn-group-lg" type="submit"><span class="glyphicon glyphicon-open"></span>  Importer la liste</button></p>
    </form>

</div><!--no delete-->
</div><!--no delete-->
</div><!--no delete-->
<?php
include ('professors-footer.php');
?>