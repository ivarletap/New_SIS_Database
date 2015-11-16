<?php
session_start();
ini_set('display_errors', 'on');
ini_set('log_errors', 1);
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_STRICT & ~E_DEPRECATED);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Comp353 Project</title>

<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- Latest compiled and minified CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="../css/general.css" rel="stylesheet" type="text/css">
<link href="../css/navColor.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.min.js"></script>
    <script src="../js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="container-fluid bg-info" style="height: 1500px">
    <div id="navigation">
        <div class="row">
            <?php require("navigationAdmin.php"); ?>
        </div>
    </div>
    	<div class="row">
               
        </div>
		

	</div><!---body--->
</div><!----container fluid------->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery_min_1112.js"></script>
    
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>