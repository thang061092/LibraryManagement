<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-4">
                <a class="btn btn-primary" href="index.php?page=add-student">Add new</a>
            </div>
            <div class="col-12 col-md-8">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="search"
                           aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 list-student">
        <div class="col-12 col-md-12">
            <table class="table table-hover">
                <thead class="thead-dark table-bordered">
                <tr>
                    <td>STT</td>
                    <td>Student Name:</td>
                    <td>Gender:</td>
                    <td>Address:</td>
                    <td>Email:</td>
                    <td>Phone</td>
                    <td></td>
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
</div>