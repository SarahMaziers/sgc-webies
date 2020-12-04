<?php

require_once('config.php');
require_once ('controllers/Home.php');
require_once('models/Model.php');

// on a chargé tous les elements qui nous permettront de charger une vue
//c'est le controller qui devra charger la bonne vue

$page=new Home('Webies - the best cinema ever');
$page->render();