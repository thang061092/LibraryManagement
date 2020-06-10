<body>
<h3>Thêm thể loại sách</h3>
<div class="col-12 col-md-12">
    <div>
        <form method="post" class="">
            <label for="exampleFormControlTextarea1">Id:</label>
            <input class="form-control" name="id" type="text" required>
            <label for="exampleFormControlTextarea1">Name:</label>
            <input class="form-control" name="cate" type="text" required>
            <label for="exampleFormControlTextarea1">Description:</label>
            <input class="form-control" name="desc" type="text" required>
            <br>
            <div class="bt-4">
                <button type="submit" class="btn btn-primary">Add</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </div>
        </form>
    </div>

</div>
</body>
