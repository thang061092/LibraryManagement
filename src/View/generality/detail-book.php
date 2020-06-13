<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover table-bordered">
            <tr>
                <th>Họ và Tên</th>
                <td><?php echo $order[0]["studentName"] ?></td>
            </tr>
            <tr>
                <th>Số điện thoại</th>
                <td><?php echo $order[0]["phone"] ?></td>
            </tr>
        </table>

    </div>
</div>
<h3>Thêm sách vào phiếu mượn :</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post">
            <label for="exampleFormControlTextarea1">Phiếu Mượn:</label>
            <input type="text" name="order" value="<?php echo $order[0]["card"] ?>" readonly>
            <br>
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
