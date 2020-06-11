<body>
<h3>Thêm thẻ mượn</h3>
<div class="col-12 col-md-12">
    <form method="post">
        <label for="exampleFormControlTextarea1">Card: </label>
        <input class="form-control" type="text" name="card" required>
        <label for="exampleFormControlTextarea1">Borrow Date: </label>
        <input class="form-control" type="text" name="borrowdate" required>
        <label for="exampleFormControlTextarea1">Return Date: </label>
        <input class="form-control" type="text" name="returndate" required>
        <label for="exampleFormControlTextarea1">Status: </label>
        <input class="form-control" type="text" name="status" required>
        <label for="exampleFormControlTextarea1">Comment: </label>
        <input class="form-control" type="text" name="comment" required>
        <label for="exampleFormControlTextarea1">Id Sinh viên: </label>
        <select class="custom-select custom-select-lg mb-3" name="idStudent">
            <?php foreach ($students as $key => $student): ?>
                <option value="<?php echo ++$key; ?>"><?php echo $student->getStudentName(); ?></option>
            <?php endforeach; ?>
        </select>
        <div>
            <button class="btn btn-primary" type="submit">Add</button>
            <button class="btn btn-danger" onclick="window.history.go(-1); return false;">Cancel</button>
        </div>
    </form>
</div>
</body>
