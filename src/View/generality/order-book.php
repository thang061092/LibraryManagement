<h3>Thêm sách vào phiếu mượn :</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post">
            <label for="exampleFormControlTextarea1">Phiếu Mượn:</label>
            <select class="custom-select custom-select-lg mb-3" name="order">
                <?php foreach ($borrowOrders as $key => $borrowOrder): ?>
                    <option value="<?php echo $borrowOrder->getCard(); ?>"><?php echo $borrowOrder->getCard(); ?></option>
                <?php endforeach; ?>
            </select>
            <label for="exampleFormControlTextarea1">Chọn sách:</label>
            <select class="custom-select custom-select-lg mb-3" name="book">
                <?php foreach ($books as $key => $book): ?>
                    <option value="<?php echo $book->getIdBook(); ?>"><?php echo $book->getBookName(); ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <div class="bt-4">
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>

</div>

