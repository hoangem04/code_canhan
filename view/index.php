<?php
session_start();
include "../model/pdo.php";
include "../model/sanpham.php";
include "../model/taikhoan.php";
include "../model/danhmuc.php";
include "../model/giohang.php";
include "../model/binhluan.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../asset/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Shop Quần Áo Luxury Man</title>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php include "header.php"; ?>
        <!-- end header -->
        <!-- Main-->
        <?php

        if (isset($_GET['act']) && $_GET['act'] != "") {
            $act = $_GET['act'];
            switch ($act) {
                case 'trangchu':
                    $dssp = getsix_sanpham();
                    include "home.php";
                    break;
                case 'login':
                    if (isset($_POST['btn-login'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $check_user = check_user($user, $pass);
                        if (isset($check_user) && is_array($check_user)) {
                            $_SESSION['user'] = $check_user;
                            header("location: ?act=trangchu");
                        } else {
                            $thongbao = "Tên đăng nhập hoặc mật khẩu không tồn tại";
                        }
                    }
                    include "login.php";
                    break;
                case 'if-taikhoan':
                    if (isset($_GET['idtk'])) {
                        $if_tk = gettaikhoan_id($_GET['idtk']);
                    }
                    include "if-taikhoan.php";
                    break;
                case "logout":
                    session_unset();
                    header("location: ?act=trangchu");
                    break;

                case 'register-tk':
                    if (isset($_POST['btn-register'])) {
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $role = $_POST['role'];
                        add_taikhoan_khachhang($user, $pass, $email, $address, $tel, $role);
                        $thongbao = "Đăng ký tài khoản thành công!";
                    }
                    include "register-tk.php";
                    break;
                case 'ct-taikhoan':
                    include "taikhoan/ct-taikhoan.php";
                    break;
                case 'ct-sanpham':
                    if (isset($_GET['idsp'])) {
                        $ct_sp = getsanpham_ct($_GET['idsp']);
                        $dsbl =  load_binhluan($_GET['idsp']);
                        $sanpham_lq = xemthem_sanpham($_GET['idsp']);
                    }
                    if (isset($_POST['btnSubmit'])) {
                        add_binhluan($_POST['noidung'], $_POST['iduser'], $_POST['idpro'], $_POST['datetime']);
                        header("Location: ?act=ct-sanpham&idsp=" . $_GET['idsp']);
                    }
                    include "ct-sanpham.php";
                    break;
                case 'pro-sominam':
                    $dsdm = getAll_danhmuc();
                    break;
                case 'pro-aophongnam':
                    $pro_dm = getsanpham_dm();
                    include "dm-sanpham.php";
                    break;
                case 'add-giohang':

                    include "donhang/giohang.php";
                    break;
                case 'giohang':
                    include "donhang/giohang.php";
                    break;
                case 'donhang':
                    include "donhang/donhang.php";
                    break;
                default:
                    include "home.php";
                    break;
            }
        } else {
            include "home.php";
        }
        ?>
        <!-- end main -->
        <!-- Footer -->
        <?php include "footer.php" ?>
        <!-- end footer-->
    </div>
</body>

</html>