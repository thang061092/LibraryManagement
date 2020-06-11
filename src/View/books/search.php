<div class="col-12 col-md-12 ">
    <table class="table table-hover">
        <thead class="thead-dark table-bordered">
        <tr>
            <th>STT</th>
            <th>Book</th>
            <th>Author</th>
            <th>Publisher</th>
            <th>PublishYear</th>
            <th>Price</th>
            <th></th>
        </tr>
        </thead>
        <?php if (empty($books)): ?>
            <tr>
                <th colspan="10">
                    No Data
                </th>
            </tr>
        <?php else: ?>
            <?php foreach ($books as $key => $book): ?>
                <tr>
                    <td><?php echo ++$key ?></td>
                    <td><?php echo $book->getBookName() ?></td>
                    <td><?php echo $book->getAuthor() ?></td>
                    <td><?php echo $book->getPublisher() ?></td>
                    <td><?php echo $book->getPublishYear() ?></td>
                    <td><?php echo $book->getPrice() ?></td>
                </tr>
            <?php endforeach; ?>

        <?php endif; ?>

    </table>
</div>
