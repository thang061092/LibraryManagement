<?php
session_start();
require '../../../vendor/autoload.php';

use App\Controller\LoginController;

$controller = new LoginController();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $controller->login($email, $password);
}