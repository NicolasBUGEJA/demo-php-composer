<?php
include_once './vendor/autoload.php';
include './app/myapp.php';

$myapp = new \myapp\myapp();
//$ping = $myapp->isOK();
//$ping = false;
$rows = $myapp->getMyRows();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CleverCloud composer</title>
    <link rel="stylesheet" href="/public/css/main.css" type="text/css" media="all">
  </head>
  <body>
    <?php
    foreach($rows as $row){
      var_dump($row);
    }
    ?>
  </body>
</html>
