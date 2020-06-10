<body>
<h3>Thêm thể loại sách</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post" class="">
            <label for="exampleFormControlTextarea1">IdBook:</label>
            <input class="form-control" name="id" type="text" required>
            <label for="exampleFormControlTextarea1">Book:</label>
            <input class="form-control" name="name" type="text" required>
            <label for="exampleFormControlTextarea1">Author:</label>
            <input class="form-control" name="author" type="text" required>
            <label for="exampleFormControlTextarea1">Publisher:</label>
            <input class="form-control" name="publisher" type="text" required>
            <label for="exampleFormControlTextarea1">PublishYear:</label>
            <input class="form-control" name="publishYear" type="text" required>
            <label for="exampleFormControlTextarea1">Price:</label>
            <input class="form-control" name="price" type="text" required>
            <label for="exampleFormControlTextarea1">IdCategory:</label>
            <input class="form-control" name="idCategory" type="text" required>
            <br>
            <div class="bt-4">
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>

</div>
</body>
