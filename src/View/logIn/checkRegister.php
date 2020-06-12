<?php

use App\Controller\LoginController;

require '../../../vendor/autoload.php';

$controller = new LoginController();
$controller->addUser();