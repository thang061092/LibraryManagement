<h3>Thêm thể loại sách</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post" class="">
            <div>
            <label for="exampleFormControlTextarea1">IdBook:</label>
            <input class="form-control" name="id" type="text" required placeholder="text number">
            <label for="exampleFormControlTextarea1">Book:</label>
            <input class="form-control" name="name" type="text" required placeholder="text">
            <label for="exampleFormControlTextarea1">Author:</label>
            <input class="form-control" name="author" type="text" required placeholder="text">
            <label for="exampleFormControlTextarea1">Publisher:</label>
            <input class="form-control" name="publisher" type="text" required placeholder="text">
            <label for="exampleFormControlTextarea1">PublishYear:</label>
            <input class="form-control" name="publishYear" type="number" required placeholder="yyyy">
            <label for="exampleFormControlTextarea1">Price:</label>
            <input class="form-control" name="price" type="number" required placeholder="number">
            <label for="exampleFormControlTextarea1">Category:</label>
            <select class="custom-select custom-select-lg mb-3" name="idCate">
                <?php foreach ($categorys as $key => $category): ?>
                    <option value="<?php echo $category->getId() ;?>"><?php echo $category->getCategoryName() ;?></option>
                <?php endforeach; ?>
            </select>
            </div>
            <div class="bt-4">
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>

</div>