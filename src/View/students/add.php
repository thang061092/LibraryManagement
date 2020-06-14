<body>
<h3>Thêm sinh viên</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post">
            <label for="exampleFormControlTextarea1">Id: </label>
            <input class="form-control" type="text" name="id" id="" required>
            <label for="exampleFormControlTextarea1">Student Name: </label>
            <input class="form-control" type="text" name="studentName" id="" required>
            <label for="exampleFormControlTextarea1">Gender: </label>
            <input class="form-control" type="text" name="gender" id="" required>
            <label for="exampleFormControlTextarea1">Address: </label>
            <input class="form-control" type="text" name="address" id="" required>
            <label for="exampleFormControlTextarea1">Email: </label>
            <input class="form-control" type="email" name="email" id="" required>
            <label for="exampleFormControlTextarea1">Phone: </label>
            <input class="form-control" type="number" name="phone" id="" required>
            <div>
                <button class="btn btn-primary" type="submit">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>

