<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="./images/favicon.png">

        <title>Intra-Stage</title>

        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="bootstrap/css/signin.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">        

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css" id="holderjs-style"></style>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <a class="navbar-brand" href="./index.php">Intra-Stage</a>
            </nav>
            <form class="form-signin" method="POST" action="./processing/professors-connection-process.php">
                <h2 class="form-signin-heading"><span class="glyphicon glyphicon-user"></span> Authentification Professeur</h2>
                <input class="form-control" name="professors_login" placeholder="Identifiant" required="" autofocus="" type="text">
                <input class="form-control" name="professors_password" placeholder="Mot de passe" required="" type="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit"><span class="glyphicon glyphicon-log-in"></span> Connexion</button>
                <br />
                <br />
                <br />
                <br />

                <p>
                    <a class="btn btn-lg btn-primary btn-block" href="./students/students-dashboard.php" role="button">Accès Élèves</a>
                </p>
            </form>
        </div> <!-- /container -->
        <hr />              
        <footer>
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">
                <img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" />
            </a>
            <br />
            <span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">Intra-Stage de </span>
            <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">Thibault Carcaillon</span> est mis à disposition selon les termes de la 
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">licence Creative Commons Attribution - Pas d’Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International</a>.
        </footer>
    </body>
</html>