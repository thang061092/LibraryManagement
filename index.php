<?php

use App\Controller\LibraryController;

$load = require __DIR__ . '/vendor/autoload.php';
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : '';
$controller = new LibraryController();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=view-category">Category</a>
<a href="index.php?page=add-category">Add Category</a>
<?php
switch ($page) {
    case "view-category":
        $controller->viewCategory();
        break;
}
?>
</body>
</html>