<?php
require_once '../config.php';
if($qs){
    print $qs;
    
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Venta de boletos para Turitab">
    <meta name="author" content="Ricardo Velázquez Ramón">
    <link rel="icon" href="favicon.ico">
    <title>Administración</title>
    <!-- Bootstrap core CSS -->
    <link href="<?= css ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?= css ?>font-awesome.min.css" rel="stylesheet">
    <link href="<?= css ?>style.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?= css ?>ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?= js ?>ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= js ?>jquery.min.js"><\/script>')</script>
    <script src="<?= js ?>bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= js ?>ie10-viewport-bug-workaround.js"></script>
  </head>
  <body>
<?php
include('menu.php');
include($q."/$qs.php");
print "Ultima visita: ".$_COOKIE["ultimavisita"];
?>
       AIzaSyBBFKqdTD63mxE8c939GQlhBpmys5T3Nbw 
  </body>
</html>
<?php
print_r($_SERVER);
print "<br>";
print_r($_COOKIE);
?>