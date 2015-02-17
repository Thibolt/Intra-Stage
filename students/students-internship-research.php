<?php
include ('students-header.php');
include ('students-static-navbar-research.php');
?>

<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <span class="navbar-brand" href="#">Filtres de recherche</span>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <form class="navbar-form navbar-left" role="search">
                    <label for="student-option">Option :</label>
                    <select class="form-control" id="student-option" name="student_option"  required="">
                        <option value="full">peu importe</option>
                        <option value="SISR">SISR</option>
                        <option value="SLAM">SLAM</option>
                    </select>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="rechercher">
                    </div>
                    <button type="submit" class="btn btn-default">Filtrer</button>
                </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<h2 class="sub-header">Les Entreprises</h2>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Entreprise</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Téléphone</th>
                <th>Note</th>                
            </tr>
        </thead>
        <tbody>
            <tr onclick="">
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
                <td>dolor</td>
                <td>5/5</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
<?php
include('students-footer.php');
?>
