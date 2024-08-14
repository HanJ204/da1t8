<?php
session_start();
ob_start();
if (!isset($_SESSION["giohang"])) {
    $_SESSION["giohang"] = [];
}
include "dao/global.php";
include "dao/pdo.php";
include "dao/user.php";
include "dao/danhmuc.php";
include "dao/sanpham.php";
include "dao/giohang.php";
include "dao/thanhtoan.php";
include "view/header.php";
$dssp_new = get_dssp_new(4);
$dssp_view = get_dssp_view(4);
$dssp_noibat = get_dssp_noibat(4);
$dsbn = get_banner_1();
if (!isset($_GET['pg'])) {
    include "view/home.php";
} else {
    switch ($_GET['pg']) {
        case 'sanpham':
            $dsdm = danhmuc_all();
            $kyw = "";
            $titlepage = "";

            $page = isset($_GET['page']) ? $_GET['page'] : 1;  // Lấy số trang từ URL, nếu không có thì mặc định là 1
            $offset = ($page - 1) * SO_SP_TRANG; // Tính offset cho SQL

            if (!isset($_GET['iddm'])) {
                $iddm = 0;
            } else {
                $iddm = $_GET['iddm'];
                $titlepage = get_name_dm($iddm);
            }
            //kiemtra 
            if (isset($_POST["timkiem"])) {
                $kyw = $_POST["kyw"];
            }
            $dssp = get_dssp($kyw, $iddm, SO_SP_TRANG, $offset);

            $tongsp_nolimit = get_dssp($kyw, $iddm, 0);

            $hienthisotrang = hienthisotrang(count($tongsp_nolimit));
            include "view/sanpham.php";
            break;
        case 'chitietsanpham':
            if (isset($_GET['idpro'])) {
                $id = $_GET['idpro'];
                $spchitiet = get_sp_by_id($id);
                $dsdm = danhmuc_all();
                $iddm = $spchitiet['iddm'];
                $splienquan = get_dssp_lienquan($iddm, $id, 4);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'addcart':
            if (isset($_POST["addcart"])) {
                $idpro = $_POST["idpro"];
                $name = $_POST["name"];
                $img = $_POST["img"];
                $price = $_POST["price"];
                $soluong = $_POST["soluong"];
                $thanhtien = (int)$soluong * (int)$price;
                $sp = array("idpro" => $idpro, "name" => $name, "img" => $img, "price" => $price, "soluong" => $soluong, "thanhtien" => $thanhtien);
                array_push($_SESSION["giohang"], $sp);
                header('location: index.php?pg=viewcart');
            }
            break;
        case 'viewcart':
            if (isset($_GET['del']) && ($_GET['del'] == 1)) {
                unset($_SESSION["giohang"]);
                header('location: index.php?pg=viewcart');
            } else {
                if (isset($_SESSION["giohang"])) {
                    $tongdonhang = get_tongdonhang();
                }
                $giatrivoucher = 0;
                if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
                    $tongdonhang = $_POST['tongdonhang'];
                    $mavoucher = $_POST['mavoucher'];
                    $giatrivoucher = 10;
                }
                $thanhtoan = $tongdonhang - $giatrivoucher;
                include "view/viewcart.php";
            }
            break;
        case 'xoagiohang':
            if (isset($_GET['idd']) && ($_GET['idd'] >= 0)) {
                array_splice($_SESSION['giohang'], $_GET['idd'], 1);
                header('location:index.php?pg=viewcart');
            }
            break;
        case 'thanhtoan':
            if (isset($_SESSION["giohang"])) {
                $tongdonhang = get_tongdonhang();
            }
            $giatrivoucher = 0;
            if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
                $tongdonhang = $_POST['tongdonhang'];
                $mavoucher = $_POST['mavoucher'];
                $giatrivoucher = 10;
            }
            $thanhtoan = $tongdonhang - $giatrivoucher;
            include "view/thanhtoan.php";
            break;
        case 'thanhtoansubmit':
            if (isset($_POST['thanhtoansubmit'])) {
                $hoten = $_POST['hoten'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $dienthoai = $_POST['dienthoai'];
                $pttt = $_POST['pttt'];
                $iduser = $_SESSION['s_user']["id"];
                $madh = "#".rand(1,9999);
                $ngaymua=date("Y-m-d");
                $total = get_tongdonhang();
                $ship = 0;
                if (isset($_SESSION['giatrivoucher'])) {
                    $voucher = $_SESSION['giatrivoucher'];
                } else {
                    $voucher = 0;
                }
                $tongthanhtoan = ($total - $voucher) + $ship;
                $idbill = bill_insert_id($madh, $iduser, $hoten, $email, $dienthoai, $diachi, $total, $ship, $voucher, $tongthanhtoan, $pttt);
                foreach ($_SESSION['giohang'] as $sp) {
                    extract($sp);
                    cart_insert($idpro, $price, $name, $img, $soluong, $thanhtien, $idbill);
                }
                $_SESSION['giohang'] = null;
            }
            header('location:index.php?pg=hoanthanh');
            break;
        case 'hoanthanh':
            if (isset($_SESSION["giohang"])) {
                $tongdonhang = get_tongdonhang();
            }
            $giatrivoucher = 0;
            if (isset($_GET['voucher']) && ($_GET['voucher'] == 1)) {
                $tongdonhang = $_POST['tongdonhang'];
                $mavoucher = $_POST['mavoucher'];
                $giatrivoucher = 10;
            }
            $thanhtoan = $tongdonhang - $giatrivoucher;
            include "view/hoanthanh.php";
            break;
        case 'dangnhap':
            include "view/dangnhap.php";
            break;
        case 'adduser':
            // xác định giá trị input
            if (isset($_POST["dangky"]) && ($_POST["dangky"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $dienthoai = $_POST["dienthoai"];
                $email = $_POST["email"];
                user_insert($username, $password, $email, $dienthoai);
            }
            include "view/dangnhap.php";
            break;
        case 'login':
            if (isset($_POST["dangnhap"]) && ($_POST["dangnhap"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];
                $kq = checkuser($username, $password);
                if (is_array($kq) && (count($kq))) {
                    $_SESSION['s_user'] = $kq;
                    if ($_SESSION['trang'] == "chitietsanpham") {
                        header('location: index.php?pg=chitietsanpham&idpro=' . $_SESSION['idpro'] . '#binhluan');
                    } else {
                        header('location: index.php');
                    }
                    if ($kq['role'] == 1) {
                        header('location: ./admin/index.php');
                    }
                } else {
                    $tb = "Tài khoản hoặc mật khẩu không tồn tại!";
                    $_SESSION['tb_dangnhap'] = $tb;
                    header('location: index.php?pg=dangnhap');
                }
            }
            break;
        case 'logout':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                unset($_SESSION['s_user']);
            }
            header('location: index.php');
            break;
        case 'myaccount_conform':
            include "view/myaccount_conform.php";
            break;  
        case 'myaccount':
            if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
                include "view/myaccount.php";
            }
            break;
        case 'updateuser':
            if (isset($_POST["capnhat"])) {
                $username = $_POST["username"];
                $email = $_POST["email"];
                $diachi = $_POST["diachi"];
                $dienthoai = $_POST["dienthoai"];
                $id = $_POST["id"];
                $role = 0;
                user_update($username, $email, $diachi, $dienthoai, $role, $id);
                include "view/myaccount_conform.php";
            }
            break;
        case 'dangky':
            include "view/dangky.php";
            break;
        default:
            include "view/home.php";
            break;
    }
}
include "view/footer.php";
