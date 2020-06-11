<div class="row pt-4">
    <div class="col-12 col-md-12 ">
        <div class="row">
            <div class="col-12 col-md-8">
                <a class="btn btn-primary" href="index.php?page=add-borrow-order">Add new</a>
            </div>
            <div class="col-12 col-md-4">
                <form class="form-inline my-2 my-lg-0">
                    <input  class="form-control" type="search" placeholder="search" aria-label="Search" required>
                    <button type="submit" class="btn btn-outline-success my-2 my-sm-0"><span class = "glyphicon glyphicon-search" ></span>Search</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 list-borrow-order">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark table-bordered">
            <tr>
                <th>Card</th>
                <th>Borrow Date</th>
                <th>Return Date</th>
                <th>Status</th>
                <th>Comment</th>
                <th></th>
            </tr>
            </thead>
            <?php if (empty($borrowOrders)): ?>
                <tr>
                    <th colspan="10">
                        No data
                    </th>
                </tr>
            <?php else: ?>
                <?php foreach ($borrowOrders as $key => $borrowOrder): ?>
                    <tr>
                        <td><?php echo $borrowOrder->getCard() ?></td>
                        <td><?php echo $borrowOrder->getBorrowDate() ?></td>
                        <td><?php echo $borrowOrder->getReturnDate() ?></td>
                        <td><?php echo $borrowOrder->getStatus() ?></td>
                        <td><?php echo $borrowOrder->getComment() ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?page=update-borrow-order&id=<?php echo $borrowOrder->getCard(); ?>">Update</a>
                            <a class="btn btn-danger" href="index.php?page=delete-borrow-order">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
    </div>
</div>
