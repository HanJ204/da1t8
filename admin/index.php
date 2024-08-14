<?php
include "../dao/global.php";
include "../dao/pdo.php";
include "../dao/user.php";
include "../dao/danhmuc.php";
include "../dao/sanpham.php";
include "view/header.php";
if (isset($_GET['pg'])) {
    $pg = $_GET['pg'];
    switch ($pg) {
//Hiển Thị Sản Phẩm
        case 'sanphamlist':
            $sanphamlist = get_dssp_new(100);
            include "view/sanphamlist.php";
            break;
//
//Thêm Mới Sản Phẩm
        case 'sanphamadd':
            $danhmuclist = danhmuc_all();
            include "view/sanphamadd.php";
            break;
        case 'addproduct':
            if (isset($_POST['addproduct'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $iddm = $_POST['iddm'];
                $img = $_FILES['img']['name'];
                sanpham_insert($name, $img, $price, $iddm);
                $target_file = IMG_PATH_ADMIN . $img;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                $sanphamlist = get_dssp_new(100);
                include "view/sanphamlist.php";
            } else {
                $danhmuclist = danhmuc_all();
                include "view/sanphamadd.php";
            }
            break;
//
//Xóa Sản Phẩm
        case 'delproduct':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $img = IMG_PATH_ADMIN . get_img($id);
                if (is_file($img)) {
                    unlink($img);
                }
                try {
                    sanpham_delete($id);
                } catch (\Throwable $th) {
                    echo "<h4 style='color:red;text-align:center'>Sản Phẩm Có Trong Giỏ Hàng! Không Thể Xóa!</h3>";
                }
            }
            $sanphamlist = get_dssp_new(100);
            include "view/sanphamlist.php";
            break;
//
//Sửa Sản Phẩm 
        case 'sanphamupdate':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $sp = get_sp_by_id($id);
            }
            $danhmuclist = danhmuc_all();
            include "view/sanphamupdate.php";
            break;
        case 'updateproduct':
            if (isset($_POST['updateproduct'])) {
                $name = $_POST['name'];
                $price = $_POST['price'];
                $iddm = $_POST['iddm'];
                $id = $_POST['id'];
                $img = $_FILES['img']['name'];
                if ($img != "") {
                    $target_file = IMG_PATH_ADMIN . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                } else {
                    $img = "";
                }
                sanpham_update($name, $img, $price, $iddm, $id);
            }
            $sanphamlist = get_dssp_new(100);
            include "view/sanphamlist.php";
            break;
//   
//Hiển Thị Danh Mục
        case 'danhmuc':
            $danhmuc = danhmuc_all(20);
            include "view/danhmuc.php";
            break;
//
//Thêm Danh Mục
        case 'danhmucadd':
            $danhmuc = danhmuc_all(20);
            include "view/danhmucadd.php";
            break;
        case 'adddanhmuc':
            if (isset($_POST['adddanhmuc'])) {
                $name = $_POST['name'];
                $home = $_POST['home'];
                $stt = $_POST['stt'];
                $img = $_FILES['img']['name'];
                danhmuc_insert($name, $home, $stt, $img);
                $target_file = IMG_PATH_ADMIN . $img;
                move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                $danhmuc = danhmuc_new(50);
                include "view/danhmuc.php";
            }
            break;
//
//Xóa Danh Mục
        case 'deldanhmuc':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $img = IMG_PATH_ADMIN . get_img_dm($id);
                if (is_file($img)) {
                    unlink($img);
                }
                try {
                    danhmuc_delete($id);
                } catch (\Throwable $th) {
                    echo "<h4 style='color:red;text-align:center'>Danh mục đã có sản phẩm! Không Thể Xóa!</h3>";
                }
            }
            $danhmuc = danhmuc_new(50);
            include "view/danhmuc.php";
            break;
//
//Sửa Danh mục
        case 'danhmucupdate':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $dm = get_dm_by_id($id);
            }
            include "view/danhmucupdate.php";
            break;
        case 'updatedanhmuc':
            if (isset($_POST['updatedanhmuc'])) {
                $name = $_POST['name'];
                $home = $_POST['home'];
                $stt = $_POST['stt'];
                $id = $_POST['id'];
                $img = $_FILES['img']['name'];
                if ($img != "") {
                    $target_file = IMG_PATH_ADMIN . $img;
                    move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                } else {
                    $img = "";
                }
                danhmuc_update($name, $img, $home, $stt,$id);
            }
            $danhmuc = danhmuc_new(50);
            include "view/danhmuc.php";
            break;
//
//Hiển Thị Người Dùng
        case 'user':
            $user = user_all();
            include "view/user.php";
            break;
//
//Thêm Người Dùng
        case 'useradd':
            $user = user_all();
            include "view/useradd.php";
            break;
        case 'adduser':
            if (isset($_POST['adduser'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $dienthoai = $_POST['dienthoai'];
                $role = $_POST['role'];
                insert_user($username, $password, $ten, $email, $diachi, $dienthoai, $role);
                $user = user_new(50);
                include "view/user.php";
            }
            break;
//
//Xóa Người Dùng
        case 'deluser':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                try {
                    user_delete($id);
                } catch (\Throwable $th) {
                    echo "<h4 style='color:red;text-align:center'>Người dùng này đang có đơn hàng! Không Thể Xóa!</h3>";
                }
            }
            $user = user_new(50);
            include "view/user.php";
            break;
//
//Sửa Người Dùng
            case 'userupdate':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $user = get_user_by_id($id);
            }
            include "view/userupdate.php";
            break;
            case 'updateuser':
            if (isset($_POST['updateuser'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $ten = $_POST['ten'];
                $email = $_POST['email'];
                $diachi = $_POST['diachi'];
                $dienthoai = $_POST['dienthoai'];
                $role = $_POST['role'];
                $id = $_POST['id'];
                update_user($username, $password, $ten, $email, $diachi, $dienthoai,$role,$id);
            }
            $user = user_new(50);
            include "view/user.php";
            break;
//
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
