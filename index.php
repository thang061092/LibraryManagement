<?php
session_start();

use App\Controller\BookController;
use App\Controller\CategoryController;
use App\Controller\InfoCardController;
use App\Controller\LoginController;
use App\Controller\StudentControler;
use App\Controller\BorrowOrderController;
use App\Middleware\Authentication;

$load = require __DIR__ . '/vendor/autoload.php';


$auth = new Authentication();
$auth->isLogin();


$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';

$controllerCate = new CategoryController();
$controllerBook = new BookController();
$controllerStudent = new StudentControler();
$controllerInfo = new InfoCardController();
$controllerBorrowOrder = new BorrowOrderController();
$controllerLogin = new LoginController();


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/htmt.css" type="text/css">
</head>
<body>
<div class="container">
    <?php include_once 'src/View/core/menu.php' ?>
    <?php
    switch ($page) {
        case "view-category":
            $controllerCate->viewCategory();
            break;
        case "update-category":
            $controllerCate->updateCategory();
            break;
        case "add-category":
            $controllerCate->addCategory();
            break;
        case "view-book":
            $controllerBook->viewBook();
            break;
        case"update-book":
            $controllerBook->updateBook();
            break;
        case "add-book":
            $controllerBook->addBook();
            break;
        case "search-book":
            $controllerBook->searchBook();
            break;
        case "view-student":
            $controllerStudent->viewStudent();
            break;
        case "add-student":
            $controllerStudent->addStudent();
            break;
        case "update-student":
            $controllerStudent->updateStudent();
            break;
        case "search-student":
            $controllerStudent->searchStudent();
            break;
        case "view-borrow-order":
            $controllerBorrowOrder->viewBorrowOrder();
            break;
        case "add-borrow-order":
            $controllerBorrowOrder->addBorrowOrder();
            break;
        case "show-order":
            $controllerInfo->viewListOrder();
            break;
        case "detail-order":
            $id = $_REQUEST["id"];
            $controllerInfo->showInfoOrder($id);
            break;
        case "order-book":
            $controllerInfo->orderBook();
            break;
        case "order-data-book":
            $controllerInfo->order();
            break;
        case "delete-order":
            $idc = $_REQUEST["idCard"];
            $idb = $_REQUEST["idBook"];
            $controllerInfo->deleteOrder($idc, $idb);
            break;
        default:
            $controllerBook->viewBook();
            break;
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</body>
</html>