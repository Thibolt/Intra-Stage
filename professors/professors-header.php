<?php
include ('../processing/login_class.php');
include ('../processing/dashboard_class.php');
// Openning session
session_name('intra-stage');
session_start();

$controlSession = new Login();
$controlSession->controlSession();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../images/favicon.png">

        <title>Intra-Stage | Professeurs</title>

        <!-- Bootstrap core CSS -->
        <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../bootstrap/css/dashboard.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        
        <!--font awesome-->
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
       <![endif]-->
        <!--Chart.JS-->
        <script src='../ChartJs/Chart.js'></script>
    </head>
