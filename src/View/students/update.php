<body>
<h3>Cập nhập sinh viên</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post" action="index.php?page=update-student">
            <label for="exampleFormControlTextarea1">Id: </label>
            <input class="form-control" type="hidden" name="id" value="<?php echo $student->getId(); ?>" disabled>
            <label for="exampleFormControlTextarea1">Student Name: </label>
            <input class="form-control" type="text" name="studentName" value="<?php echo $student->getStudentName(); ?>" >
            <label for="exampleFormControlTextarea1">Gender: </label>
            <input class="form-control" type="text" name="gender" value="<?php echo $student->getGender(); ?>" >
            <label for="exampleFormControlTextarea1">Address: </label>
            <input class="form-control" type="text" name="address" value="<?php echo $student->getAddress(); ?>" >
            <label for="exampleFormControlTextarea1">Email: </label>
            <input class="form-control" type="text" name="email" value="<?php echo $student->getEmail(); ?>" >
            <label for="exampleFormControlTextarea1">Phone: </label>
            <input class="form-control" type="text" name="phone" value="<?php echo $student->getPhone(); ?>" >
            <div>
                <button class="btn btn-primary" type="submit">Update</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>
</div>
</body>

