<div class="row pt-4">
    <div class="col-12 col-md-12 pb-2">
        <div class="row">
            <div class="col-12 col-md-8">
                <a class="btn btn-primary" href="index.php?page=add-category">Add new</a>
            </div>
            <div class="col-12 col-md-4">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
                </form>
            </div>
        </div>

    </div>
    <div class="col-12 col-md-12 list-category">
        <table class="table table-hover">
            <thead class="thead-dark table-bordered">
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
            </tr>
            </thead>
            <?php if (empty($categorys)): ?>
                <tr>
                    <th colspan="10">
                        No Data
                    </th>
                </tr>
            <?php else: ?>
                <?php foreach ($categorys as $key => $category): ?>
                    <tr>
                        <td><?php echo ++$key ?></td>
                        <td><?php echo $category->getCategoryName() ?></td>
                        <td><?php echo $category->getDescription() ?></td>
                        <td>
                            <a class="btn btn-primary" href="index.php?page=update-category&id=<?php echo $category->getId() ?>">update</a>
                            <a class="btn btn-danger" href="">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            <?php endif; ?>

        </table>
    </div>
</div>


