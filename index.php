<?php
include_once './vendor/autoload.php';
include './app/myapp.php';

$myapp = new \myapp\myapp();
$ping = $myapp->isOK();
//$ping = false;
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CleverCloud composer</title>
    <link rel="stylesheet" href="/public/css/main.css" type="text/css" media="all">
  </head>
  <body>
    <?php
    if($ping){
      echo '<h1 class="ok">OKAY !!!!!</h1>';
    }else{
      echo '<h1 class="error">NOOOOOOOOOOOOOOOOOOOO !!!</h1>';
    }
    ?>
  </body>
</html>
