
<body>
<div class="col-12 col-md-12">
    <h3>Cập nhật thông tin thư viện</h3>
    <div>
        <form method="post" action="index.php?page=update-category">
            <input class="form-control" name="id" type="hidden" value="<?php echo $category->getId(); ?>">
            <label for="exampleFormControlTextarea1">Name:</label>
            <input class="form-control" name="category" type="text" value="<?php echo $category->getCategoryName(); ?>">
            <br>
            <label for="exampleFormControlTextarea1">Description:</label>
            <input class="form-control" name="description" type="text" value="<?php echo $category->getDescription() ?>">
            <br>
            <div class="bt-4">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </form>
    </div>

</div>
</body>