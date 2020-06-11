<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
                <h3>Thông tin phiếu mượn của sinh viên</h3>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 ">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark ">
            <tr>
                <th>STT</th>
                <th>Card</th>
                <th>Status</th>
            </tr>
            </thead>
            <?php if (empty($orders)): ?>
                <tr>
                    <th colspan="10">
                        No Data
                    </th>
                </tr>
            <?php else: ?>
                <?php foreach ($orders as $key => $order): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td>
                            <a href="index.php?page=detail-order&id=<?php echo $order["card"] ?>">
                            <?php echo "PM- " . $order["card"] ?></td>
                        </a>
                        <td><?php echo "Tình Trạng ". $order["status"] ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>




