<?php
// require_once 'pdo.php';

function bill_insert_id($madh, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $total, $ship, $voucher, $tongthanhtoan, $pttt){
    $sql = "INSERT INTO bill(madh, iduser, nguoidat_ten, nguoidat_email, nguoidat_tel, nguoidat_diachi, total, ship, voucher, tongthanhtoan, pttt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";   
    return pdo_execute_id($sql, $madh, $iduser, $nguoidat_ten, $nguoidat_email, $nguoidat_tel, $nguoidat_diachi, $total, $ship, $voucher, $tongthanhtoan, $pttt);
}