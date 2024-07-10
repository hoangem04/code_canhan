<?php

function danhsach_binhluan()
{
    $sql = "SELECT binhluan.id, binhluan.noidung, sanpham.name, taikhoan.user, binhluan.ngaybinhluan FROM binhluan JOIN sanpham on sanpham.id = binhluan.idpro join taikhoan on taikhoan.id = binhluan.iduser";
    $result = pdo_query($sql);
    return $result;
}

function one_binhluan($idbl)
{
    $sql = "SELECT binhluan.id, binhluan.noidung, sanpham.name, taikhoan.user, binhluan.ngaybinhluan FROM binhluan JOIN sanpham on sanpham.id = binhluan.idpro join taikhoan on taikhoan.id = binhluan.iduser where binhluan.id= $idbl";
    $result = pdo_query_one($sql);
    return $result;
}

function delete_binhluan($idbl)
{
    $sql = "DELETE FROM binhluan WHERE id =" . $idbl;
    pdo_execute($sql);
    header("location: ?act=dsbl");
}

function edit_binhluan($id, $noidung, $user, $name, $ngaybinhluan)
{
    $sql = "UPDATE `binhluan` 
    JOIN taikhoan ON binhluan.iduser = taikhoan.id
    JOIN sanpham ON binhluan.idpro = sanpham.id
    SET binhluan.noidung = '$noidung',
        taikhoan.user = '$user',
        sanpham.name = '$name',
        binhluan.ngaybinhluan = '$ngaybinhluan'
    WHERE binhluan.id = $id";
    pdo_execute($sql);
}

function add_binhluan($noidung, $iduser, $idpro, $datetime)
{
    $sql = "INSERT INTO binhluan(`noidung`, `iduser`,`idpro`, `ngaybinhluan`) VALUES ('$noidung', '$iduser','$idpro','$datetime')";
    pdo_execute($sql);
}

function load_binhluan($idsp)
{
    $sql = "SELECT * FROM binhluan JOIN sanpham on sanpham.id = binhluan.idpro join taikhoan on taikhoan.id = binhluan.iduser where binhluan.idpro = '" . $idsp . "' order by binhluan.id desc";
    $result = pdo_query($sql);
    return $result;
}
