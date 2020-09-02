<?php

require ('./src/model/Argonautes.php');

require ('./src/controller/HomeController.php');

require ('./src/service/AccessBDD.php');

$controller = new HomeController;
$controller->manage();
