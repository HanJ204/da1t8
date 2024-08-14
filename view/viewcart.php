<?php
$html_cart = viewcart();
?>
</div>
<div class="container-fluid">
    <div class="tieu-de">
        <a class="tieu-de1 text-dark" href=""> Giỏ hàng</a>
        <a class="tieu-de1" href="index.php?pg=thanhtoan">> Đặt hàng ></a>
        <a class="tieu-de1" href="index.php?pg=viewcart">Hoàn thành</a>
    </div>
    <div class="d-flex justify-content-center">
        <div class="container-left">
            <div style="display: flex;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 icon-tc">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
                <p style="color: rgb(255, 0, 0); margin-top: -4px;">“Sản phẩm đã được thêm vào giỏ hàng".</p>
            </div>
            <table class="cart" style="width: 800px; text-align: center;">
                <tr class="duong-gach">
                    <th class="cart2"></th>
                    <th>SẢN PHẨM</th>
                    <th class="cart1">TÊN SẢN PHẨM</th>
                    <th class="cart1">GIÁ</th>
                    <th class="cart1">SỐ LƯƠNG</th>
                    <th class="cart1">TẠM TÍNH</th>
                </tr>
                <?= $html_cart; ?>
            </table>
            <div class="d-flex mt-2">
                <a href="index.php?pg=sanpham"><button class="m-2 btn-1">Tiếp Tục Xem Sản Phẩm</button></a>
                <a href="index.php?pg=viewcart&del=1"><button class="m-2 btn-2">Xóa Sản Phẩm</button></a>
            </div>
        </div>
        <div class="divider"></div>
        <div class="container-right">
            <table class="total-table" style="text-align: center;">
                <tr style="border-bottom: 1px solid #ddd; ">
                    <th class="text1-1" style="padding: 15.12px; padding-left:100px;">CỘNG GIỎ HÀNG</th>
                </tr>
                <tr style="border-bottom: 1px solid #ddd; ">
                    <th class="py-3 dinh-vi">Tạm tính</th>
                    <td class="total-item" name="tongdonhang"><?= $tongdonhang ?> ₫</td>
                </tr>
                <tr>
                    <th class="dinh-vi">Tổng</th>
                    <td class="total-item "><?= $thanhtoan ?> ₫</td>
                </tr>
            </table>
            <hr>
            <div>
                <a href="index.php?pg=thanhtoan">
                    <button class="click-thanhtoan">TIẾN HÀNH THANH TOÁN</button>
                </a>
            </div>
            <p class="mt-3" style="font-weight: 700;">Phiếu ưu đãi</p>
            <hr>
            <div class="uu-dai">
                <input type="text" placeholder="Mã ưu đãi" name="mavoucher">
                <button class="ap-dung" type="submit">Áp dụng</button>
            </div>
        </div>
    </div>
</div>
<style>
    .tieu-de1 {
        text-decoration: none;
        font-size: 24px;
        color: #cccccc;
        margin: 5px;
        font-weight: 500;

    }

    .tieu-de {
        display: flex;
        justify-content: center;
        margin-top: 25px;
    }

    .container-left {
        width: 817px;
        margin-top: 20px;
        margin: 30px;
    }

    .container-right {
        width: 410px;
        margin: 30px;
    }

    .icon-cart {
        width: 24px;
        height: 24px;
        color: #cccccc;
        margin-left: -5px;
    }

    .cart2 {
        text-align: left;
    }

    .cart1 {
        padding: 15.12px;
    }

    .item-1 {
        padding: 15.12px;
        font-weight: 600;
    }

    .cart th {
        font-size: 15px;
        border-collapse: collapse;
    }

    .duong-gach {
        border-bottom: 3px solid #ddd;
    }

    .cart tr {
        border-bottom: 1px solid #ddd;
    }

    .icon-tc {
        width: 16px;
        height: 19px;
        color: rgb(255, 0, 0);
    }

    .btn-1 {
        width: 254px;
        height: 42px;
        color: #990D23;
        border: 1px solid #990D23;
    }

    .btn-2 {
        width: 198px;
        height: 42px;
        background-color: #990D23;
        color: white;
        border: 1px solid #990d23;
    }

    .btn-1:hover {
        background-color: #990D23;
        color: white;
    }

    .total-table {
        margin-top: 40px;
        font-size: 15px;
        width: 100%;
        text-align: right;
    }

    .divider {
        width: 1px;
        /* Độ rộng của đường thẳng dọc */
        background-color: #ddd;
        /* Màu sắc của đường thẳng */
        margin-top: 100px;
        margin-left: -20px;
    }

    .dinh-vi {
        position: relative;
        text-align: left;
    }

    .click-thanhtoan {
        width: 100%;
        height: 39px;
        background-color: rgb(255, 0, 0);
        color: white;
        font-size: 15px;
        font-weight: 700;
        text-align: center;
        border: rgb(255, 0, 0);
    }

    /* Định dạng input trong div có class "uu-dai" */
    .uu-dai input {
        padding: 10px;
        width: 100%;
        height: 39px;
        font-size: 16px;
        border: 1px solid rgb(255, 0, 0);
        border-radius: 5px;
        outline: none;
        /* Loại bỏ đường viền khi focus (nếu không muốn) */
    }

    /* Định dạng placeholder trong input */
    .uu-dai input::placeholder {
        color: #999;
        /* Màu sắc của văn bản placeholder */
    }

    /* Định dạng input khi focus */
    .uu-dai input:focus {
        border-color: rgb(255, 0, 0);
        /* Đổi màu viền khi focus */
        box-shadow: 0 0 5px rgb(255, 0, 0);
        /* Hiệu ứng bóng khi focus */
    }

    .ap-dung {
        width: 100%;
        height: 39px;
        margin-top: 20px;
        text-align: center;
        background-color: #f9f9f97d;
        border: #f9f9f9;
        border-radius: 5px;
        color: #666666;
        border: 1px solid rgb(255, 0, 0);
    }
</style>