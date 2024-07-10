<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop LUXURY MAN</title>
</head>

<body>
    <div class="container">
        <main>
            <div class="content">
                <div class="title-login">
                    <p>ĐĂNG NHẬP</p>
                </div>
                <div class="content-login">
                    <div class="thongbaocapnhat">
                        <p>
                            <?php
                            if (isset($thongbao) && $thongbao != "") {
                                echo $thongbao;
                            }
                            ?>
                        </p>
                    </div>
                    <form action="?act=login" method="post">
                        <div class="name-login">
                            <label for="">Tên đăng nhập:</label>
                            <input type="text" name="user" placeholder="Tài khoản" required>
                        </div>
                        <div class="pass-login">
                            <label for="">Mật khẩu:</label>
                            <input type="password" name="pass" placeholder="Mật khẩu" required>
                        </div>
                        <button name="btn-login">
                            Đăng nhập
                        </button>
                        <div class="regisster-tk">
                            <a href="?act=register-tk">
                                <p>Chưa có tài khoảng đăng ký tại đây!.</p>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>