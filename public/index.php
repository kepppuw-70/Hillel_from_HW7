<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Домашнее задание № 9</title>
   <link rel="stylesheet" type="text/css" href="css/style2.css">
   
  </head>
  <body>

<?php
//include __DIR__ . '/../core/Router.php';
//require_once BASE_PATH . DIREECTORY_SEPARATOR . 'vendor/autoload.php';
require __DIR__ . '/../vendor/autoload.php';
use Core\Router;










?>

<!--	
<h1>Домашнее задание № 9</h1><br>
<a href="/registration">Регистрация</a>
<a href="/about">Про меня</a>
<a href="/contact">Контакты</a>
<a href="/documents">Документы</a>
<a href="/price">Цены</a>
  В индекс-->
<?php

$router = new Core\Router();
$router->setName('KePpP');
$router->setage('50');
$router->run();

?>


  </body>
</html> 

