<?php
function getsanpham_giohang($idpro)
{
    $sql = "select * from cart where id = $idpro";
    $result = pdo_query_one($sql);
    return $result;
}
function add_sanpham_giohang($soluong, $idbill = null)
{
    $sql = "INSERT INTO `cart`(`soluong`, `idbill`) VALUES (:soluong, :idbill)";
    $params = array(':soluong' => $soluong, ':idbill' => $idbill);
    pdo_execute($sql, $params);
}
