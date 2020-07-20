
<div class="menu">
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="background-color: #e3f2fd;">
        <a class="navbar-brand" href="index.php?page=view-category"><span class="glyphicon glyphicon-book"></span>
            LIBRARY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php?page=view-book"><span class="glyphicon glyphicon-home"></span>
                        Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-list-alt"></span> Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index.php?page=view-category"><span
                                    class="glyphicon glyphicon-hand-right"></span> Xem danh mục sách</a>
                        <a class="dropdown-item" href="index.php?page=view-book"><span
                                    class="glyphicon glyphicon-hand-right"></span> Xem Sách</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php?page=view-student"><span
                                    class="glyphicon glyphicon-hand-right"></span> Danh Sách Sinh Viên</a>
                        <a class="dropdown-item" href="index.php?page=view-borrow-order"><span
                                    class="glyphicon glyphicon-hand-right"></span> Danh Sách Thẻ mượn</a>
                        <a class="dropdown-item" href="index.php?page=show-order"><span
                                    class="glyphicon glyphicon-hand-right"></span> Chi tiết phiếu mượn</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="https://mail.google.com/mail/u/0/?tab=rm#inbox" tabindex="-1"
                       aria-disabled="false"><span class="glyphicon glyphicon-envelope"></span> Góp ý</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <?php echo $_SESSION['userLogin']['userName']?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="nav-link " href="src/View/logIn/checklogin.php" tabindex="-1"
                           aria-disabled="false"><span class="glyphicon glyphicon-cog"></span> Log Out</a>
                    </div>

                </li>
            </ul>
        </div>
    </nav>
</div>
