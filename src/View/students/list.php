<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
                <a class="btn btn-primary" href="index.php?page=add-student">Add new</a>
            </div>
            <div class="col-12 col-md-4">
                <form class="form-inline my-2 my-lg-0" action="index.php?page=search-student" method="post">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search" required>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" ><span class = "glyphicon glyphicon-search"></span>Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark ">
            <tr>
                <th>STT</th>
                <th>Student Name</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </tr>
            </thead>
            <?php if (empty($students)): ?>
                <tr>
                    <th colspan="10">
                        No Data
                    </th>
                </tr>
            <?php else: ?>
                <?php foreach ($students as $key => $student): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $student->getStudentName() ?></td>
                        <td><?php echo $student->getGender() ?></td>
                        <td><?php echo $student->getAddress() ?></td>
                        <td><?php echo $student->getEmail() ?></td>
                        <td><?php echo $student->getPhone() ?></td>
                        <td>
                            <a class="btn btn-primary"
                               href="index.php?page=update-student&id=<?php echo $student->getId() ?>">Update</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>



