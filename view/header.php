<div class="box-header">
    <div class="vip">
        <p>Để mua được giá tốt. Tạo thẻ VIP <a href="">tại đây</a></p>
    </div>
    <div class="tab-nav">
        <div class="logo">
            <a href="?act=trangchu">
                <img src="../asset/css/img/logo-shop.png" alt="">
            </a>
        </div>
        <div class="menu">
            <ul>
                <li><a href="?act=trangchu">Trang chủ</a></li>
                <li><a href="">Giới thiệu</a></li>
                <li><a href="?act=pro-sominam">Áo sơ mi</a></li>
                <li><a href="?act=pro-aophongnam">Áo phông</a></li>
                <li><a href=""></a></li>
            </ul>
        </div>
        <div class="search">
            <a href="">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
            <input type="search" name="tkw">
        </div>
        <?php
        if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
            $id = $_SESSION['user']['id'];
        ?>
            <div class="menu-right">
                <a href="?act=if-taikhoan&idtk=<?php echo $_SESSION['user']['id']?>"><i class="fa-solid fa-user"></i></a>
                <a href="?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>

            </div>
        <?php } else { ?>
            <div class="menu-right">
                <a href="?act=login"><i class="fa-solid fa-user"></i></a>
                <a href="?act=giohang"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        <?php } ?>
    </div>
</div>