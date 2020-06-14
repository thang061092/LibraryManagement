<body>
<h3>Thêm thẻ mượn</h3>
<div class="col-12 col-md-12">
    <form method="post">
        <div>
            <label for="exampleFormControlTextarea1">Card: </label>
            <input class="form-control" type="text" name="card" required placeholder="text number">
            <label for="exampleFormControlTextarea1">Borrow Date: </label>
            <input class="form-control" type="text" name="borrowdate" required placeholder="yyyy-mm-dd">
            <label for="exampleFormControlTextarea1">Return Date: </label>
            <input class="form-control" type="text" name="returndate" required placeholder="yyyy-mm-dd">
            <label for="exampleFormControlTextarea1">Status: </label>
            <select class="custom-select custom-select-lg mb-3" name="status">
                <option value="Đã trả">Đã trả</option>
                <option value="Chưa trả sách ">Chưa trả sách</option>
            </select>
            <label for="exampleFormControlTextarea1">Comment: </label>
            <input class="form-control" type="text" name="comment" required placeholder="text">
            <label for="exampleFormControlTextarea1">Id Sinh viên: </label>
            <select class="custom-select custom-select-lg mb-3" name="idStudent">
                <?php foreach ($students as $key => $student): ?>
                    <option value="<?php echo $student->getId(); ?>"><?php echo $student->getStudentName(); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="bt-4">
            <button class="btn btn-primary" type="submit">Add</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Cancel</button>
        </div>
    </form>
</div>
</body>
