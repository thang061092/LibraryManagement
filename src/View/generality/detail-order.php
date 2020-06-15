<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
                <h3>Thông tin chi tiết phiếu mượn</h3>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover table-bordered">
            <tr>
                <th>Phiếu Mượn</th>
                <td><?php echo "PM-" . $order[0]["card"] ?></td>
            </tr>
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
<div class="col-12 col-md-12 ">
    <form method="post">
        <div class="select">
            Status :
            <select name="option">
                <option
                    <?php if ($order[0]['status'] == 'Đã trả'): ?>
                        selected
                    <?php endif; ?>
                        value="Đã trả">Đã trả
                </option>
                <option
                    <?php if ($order[0]['status'] == 'Chưa trả sách'): ?>
                        selected
                    <?php endif; ?>
                        value="Chưa trả sách">Chưa trả sách
                </option>
            </select>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
<div class="col-12 col-md-12 pt-4">
    <table class="table table-hover table-bordered">
        <thead class="thead-dark ">
        <tr>
            <th>STT</th>
            <th>Tên sách</th>
            <th>Ngày mượn</th>
            <th>Ngày trả</th>
            <th></th>
        </tr>
        </thead>
        <?php if (empty($order)): ?>
            <tr>
                <th colspan="10">
                    No Data
                </th>
            </tr>
            <tr>
                <th colspan="10">
                    <a href="index.php?page=order-data-book" class="btn btn-primary">Mượn sách</a>
                </th>
            </tr>
        <?php else: ?>
            <?php foreach ($order as $key => $value): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $value['bookName'] ?></td>
                    <td><?php echo $value['borrowDate'] ?></td>
                    <td><?php echo $value['returnDate'] ?></td>
                    <td><a href="index.php?page=delete-order&idCard=<?php echo $value['card']?>&idBook=<?php echo $value['idBook']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            <td colspan="5">
                <a href="index.php?page=order-book&id=<?php echo $order[0]["card"] ?>" class="btn btn-primary">Mượn thêm
                    sách</a>
            </td>
        <?php endif; ?>
    </table>
    <a href="index.php?page=show-order" class="btn btn-secondary">Trở về</a>
</div>



