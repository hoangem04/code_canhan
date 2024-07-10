<?php
// session_start();
include "header.php";
include "menu.php";
include "../model/pdo.php";
include "../model/taikhoan.php";
include "../model/sanpham.php";
include "../model/danhmuc.php";

?>

<div>

    <?php
    // Controller
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {

            case 'trangchu':
                $dssp = getAll_sanpham();
                include "trangchu/trangchu.php";
                break;
            case 'list-khachhang':
                $dskh = getAll_taikhoan();
                include "khachhang/list-khachhang.php";
                break;
            case 'add-khachhang':
                if (isset($_POST['btn-sumbit'])) {
                    $user = $_POST['tenuser'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    add_khachhang($user, $pass, $email, $address, $tel, $role);
                    header("location: ?act=list-khachhang");
                }
                include "khachhang/add-khachhang.php";
                break;
            case 'update-khachhang':
                if (isset($_GET['idUdate'])) {
                    $old_kh = getold_khachhang($_GET['idUdate']);
                }
                if (isset($_POST['btn-update-khachhang'])) {
                    $id = $_POST['id'];
                    $tenkh = $_POST['tenuser'];
                    $pass = $_POST['pass'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $tel = $_POST['tel'];
                    $role = $_POST['role'];
                    update_khachhang($id, $tenkh, $pass, $email, $address, $tel, $role);
                    header("location: ?act=list-khachhang");
                }
                include "khachhang/edit-khachhang.php";
                break;

            case 'delete-khachhang':
                if (isset($_GET['idDlete'])) {
                    delete_khachhang($_GET['idDlete']);
                }
                $dskh = getAll_taikhoan();
                include "khachhang/list-khachhang.php";
                break;
            case 'list-sanpham':
                $dssp = getAll_sanpham();
                include "sanpham/list-sanpham.php";
                break;
            case 'add-sanpham':
                if (isset($_POST['btn-add-sanpham'])) {
                    $tensp = $_POST['namesp'];
                    $giasp = $_POST['giasp'];
                    $photo = null;
                    if ($_FILES['img']['name'] != "") {
                        $photo = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$photo");
                    }
                    $mota = $_POST['mota'];
                    $luotxem = $_POST['luotxem'];
                    $danhmuc = $_POST['danhmuc'];
                    add_sanpham($tensp, $giasp, $photo, $mota, $luotxem, $danhmuc);
                    header("location: ?act=list-sanpham");
                }
                $dsdm = getAll_danhmuc();
                include "sanpham/add-sanpham.php";
                break;
            case 'edit-sanpham':
                if (isset($_GET['idUp'])) {
                    $old_sp = getold_sanpham($_GET['idUp']);
                }
                if (isset($_POST['btn-update-sanpham'])) {
                    $idsp = $_POST['id'];
                    $tensp = $_POST['namesp'];
                    $giasp = $_POST['giasp'];
                    $photo = "";
                    if ($_FILES['img']['name'] != "") {
                        $photo = time() . "_" . $_FILES['img']['name'];
                        move_uploaded_file($_FILES['img']['tmp_name'], "../uploads/$photo");
                    }
                    $mota = $_POST['mota'];
                    $luotxem = $_POST['luotxem'];
                    $danhmuc = $_POST['danhmuc'];
                    update_sanpham($idsp, $tensp, $giasp, $photo, $mota, $luotxem, $danhmuc);
                    $thongbao = "Cập nhật thành công!";
                    header("location: ?act=list-sanpham");
                }
                include "sanpham/edit-sanpham.php";
                break;
            case 'delete-sanpham':
                if (isset($_GET['idSP'])) {
                    delete_sanpham($_GET['idSP']);
                }
                $dssp = getAll_sanpham();
                include "sanpham/list-sanpham.php";
                break;
            case 'danhmuc':
                $dsdm = getAll_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
            case 'add-danhmuc':
                if (isset($_POST['btn-add-danhmuc'])) {
                    $danhmuc = $_POST['ten-danhmuc'];
                    add_danhmuc($danhmuc);
                }
                include "danhmuc/add-danhmuc.php";
                break;
            case 'update-danhmuc':
                if (isset($_GET['idUP'])) {
                    $lold_dm = getold_danhmuc($_GET['idUP']);
                }
                if (isset($_POST['btn-update-danhmuc'])) {
                    $id = $_POST['id'];
                    $tenDm = $_POST['ten-danhmuc'];
                    update_danhmuc($id, $tenDm);
                    $thongbao = "Cập nhật thành công!";
                    header("location: ?act=danhmuc");
                }
                include "danhmuc/edit-danhmuc.php";
                break;
            case 'delete-danhmuc':
                if (isset($_GET['idDm'])) {
                    delete_danhmuc($_GET['idDm']);
                }
                $dsdm = getAll_danhmuc();
                include "danhmuc/danhmuc.php";
                break;
            default:
                include "trangchu/trangchu.php";
                break;
        }
    } else {
        include "trangchu/trangchu.php";
    }
    ?>
</div>