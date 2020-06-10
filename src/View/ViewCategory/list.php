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
<table border="1">
    <tr>
        <th>STT</th>
        <th>Id</th>
        <th>Category</th>
        <th>Description</th>
    </tr>
    <?php foreach ($categorys as $key => $category): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $category->getCategoryName() ?></td>
            <td><?php echo $category->getDescription() ?></td>
            <td><a href="index.php?page=update-category&id=<?php echo $category->getId()?>">update</a></td>
        </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="10"><?php if (empty($categorys))
                echo "No Data" ?>
        </th>
    </tr>
</table>
</body>
</html>
