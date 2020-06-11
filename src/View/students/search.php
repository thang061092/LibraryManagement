
<table border="1">
    <tr>
        <th>STT</th>
        <th>Student Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone</th>
        <th></th>
    </tr>
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
            </tr>
        <?php endforeach; ?>
    <?php endif; ?>

</table>
