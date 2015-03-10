
    <body>

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <span class="navbar-brand" style="color: #777777;">Intra-Stage | Professeurs</span>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <span class="navbar-brand" style="color: #777777;"><?php $displayUser = new Dashboard(); $displayUser->userDisplay(); ?></span>
                        <li><a href="./professors-dashboard.php"><span class="glyphicon glyphicon-tasks"> Panel</a></li>
                        <li class="active"><a href="./professors-dashboard-account-settings.php"><span class="glyphicon glyphicon-wrench"></span> Compte</a></li>
                        <li><a href="../processing/professors-deconnection-process.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                    </ul>
                </div>
            </div>
        </div>