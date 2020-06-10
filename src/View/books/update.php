<body>
<h3>Cập nhật thông tin sách</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post">
            <input class="form-control" name="idBook" disabled type="text" value="<?php echo $book->getIdBook() ?>">

            <label>Book:</label>
            <input class="form-control" name="nameBook" type="text" required value="<?php echo $book->getBookName() ?>">

            <label>Author:</label>
            <input class="form-control" name="author" type="text" required value="<?php echo $book->getAuthor() ?>">

            <label>Publisher:</label>
            <input class="form-control" name="publisher" type="text" required value="<?php echo $book->getPublisher() ?>">

            <label>PublishYear:</label>
            <input class="form-control" name="publishYear" type="text" required value="<?php echo $book->getPublishYear() ?>">

            <label>Price:</label>
            <input class="form-control" name="price" type="text" required value="<?php echo $book->getPrice() ?>">

            <label>IdCategory:</label>
            <input class="form-control" name="idCategory" type="text"  disabled value="<?php echo $book->getIdCategory() ?>">

            <br>
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
        </form>
    </div>

</div>
</body>
