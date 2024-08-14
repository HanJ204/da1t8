<?php
    if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
        extract($_SESSION['s_user']);
    }
?>
<div class="container mt-3">
    <div class="row">
        <div class="col-9">
            <section>
                <div style="background-color: red; color: white;font-size: 12px;font-weight: 700;grid-area: auto;height: 45px;line-height: 21px;padding: 12px;">Thông tin cá nhân</div>
            </section>
            <form action="index.php?pg=updateuser" method="post">
                <label class="ttkh1" for="username">Tên đăng nhập</label>
                <input class="ttkh" type="text" id="username" name="username" value="<?=$username?>">

                <label class="ttkh1" for="email">Email</label>
                <input class="ttkh" type="email" id="email" name="email" value="<?=$email?>">

                <label class="ttkh1" for="address">Địa chỉ</label>
                <input class="ttkh" type="text" id="address" name="diachi" value="<?=$diachi?>">

                <label class="ttkh1" for="phone">Điện thoại</label>
                <input class="ttkh" type="tel" id="phone" name="dienthoai" value="<?=$dienthoai?>">

                <input type="hidden" name="id" value="<?=$id?>">
                <button type="submit" id="button1" name="capnhat">Cập Nhật Thông Tin</button>
            </form>
        </div>
        <div class="col-3 danhmuc">
            <div>Danh mục</div>
            <a href="index.php?pg=myaccount_conform">Thông Tin Tài Khoản</a>
            <a href="index.php?pg=lichsudathang">Lịch Sử Đặt Hàng</a>
            <a href="">Bộ Sưu Tập</a>
        </div>
    </div>
</div>
<style>
    .ttkh2 {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .ttkh1 {
        width: calc(50% - 10px);
        margin-bottom: 10px;
        box-sizing: border-box;
        margin-bottom: 30px;
        margin-top: 10px;
    }

    .ttkh {
        width: calc(50% - 10px);
        height: 41px;
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 2px;
        font-family: Arial;
        font-size: 14px;
        line-height: 21px;
        padding: 9px 5px;
        box-sizing: border-box;
    }

    #button1 {
        width: 100%;
        background-color: red;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #button1:hover {
        background-color: red;
    }

    /* CSS cho cột bên phải */
    .danhmuc {
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 15px;
        border-radius: 8px;
        background-color: #fff;
        
    }

    .col-3 div {
        font-weight: bold;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .col-3 a {
        display: block;
        color: #333;
        text-decoration: none;
        margin-bottom: 5px;
        transition: color 0.3s ease;
    }
    .col-3 a:hover {
        color: red;
    }
</style>