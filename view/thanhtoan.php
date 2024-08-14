<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
    extract($_SESSION['s_user']);
    $html_account = '<input type="text" placeholder="Họ và tên" name="hoten" id="hoten" value="'.$username.'" required>
                            <input type="text" placeholder="Địa chỉ email" name="email" id="email" value="'.$email.'" required>
                            <input type="text" placeholder="Số điện thoại" name="dienthoai" id="dienthoai" value="'.$dienthoai.'" required>
                            <input type="text" placeholder="Địa chỉ" name="diachi" id="diachi" value="'.$diachi.'" required>
                            <p style="font-size: 16px;font-weight: 500;" class="mt-3">THÔNG TIN BỔ SUNG</p>';
} else {
    $html_account = '<input type="text" placeholder="Họ và tên" name="hoten" id="hoten" required>
                            <input type="text" placeholder="Địa chỉ email" name="email" id="email" required>
                            <input type="text" placeholder="Số điện thoại" name="dienthoai" id="dienthoai" required >
                            <input type="text" placeholder="Địa chỉ" name="diachi" id="diachi" required>
                            <p style="font-size: 16px;font-weight: 500;" class="mt-3">THÔNG TIN BỔ SUNG</p>
                            <p><a href="index.php?pg=dangnhap">Đăng Nhập Để Đặt Hàng</a></p>';
}
$html_thanhtoan = thanhtoan();
?>
<div class="container-fluid">
    <div class="tieu-de">
        <a class="tieu-de1" href="index.php?pg=viewcart">Giỏ hàng </a>
        <a class="tieu-de1 text-dark" href="">> Đặt hàng ></a>
        <a class="tieu-de1" href="index.php?pg=thanhtoan"> Hoàn thành</a>
    </div>
    <form action="index.php?pg=thanhtoansubmit" method="post">
        <div class="d-flex">
            <div class="container-left mt-3">
                <div class="khoang-cach">
                    <p style="font-size: 16px;font-weight: 500;">THÔNG TIN THANH TOÁN</p>
                </div>
                <?= $html_account; ?>
                <input class="chu-y" style="height: 130px; " type="text" placeholder="Chú ý về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn.">
            </div>
            <div class="container-right mt-3">
                <p style="font-size: 16px;font-weight: 500; padding: 10px;">ĐƠN HÀNG CỦA BẠN </p>
                <table class="total-table">
                    <tr style="border-bottom: 3px solid #ddd; ">
                        <th class="text1-1">SẢN PHẨM</th>
                        <th>TẠM TÍNH</th>
                    </tr>
                    <?= $html_thanhtoan; ?>
                    <tr style="border-bottom: 1px solid #ddd; ">
                        <th class="dinh-vi">Tạm tính</th>
                        <td class="total-item " name="tongdonhang" ><?= $tongdonhang ?>₫</td>
                    </tr>
                    <tr style="border-bottom: 3px solid #ddd; ">
                        <th class="dinh-vi">Tổng</th>
                        <td class="total-item "><?= $thanhtoan ?> ₫</td>
                    </tr>
                </table>
                <div class="form-check mt-3 mx-3">
                    <input class="form-check-input" type="radio" id="check1" name="pttt" value="2" checked>
                    <label style="font-weight: 600;" class="form-check-label"> Chuyển khoản ngân hàng</label>
                    <p>Thực hiện thanh toán vào ngay tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng Mã đơn hàng của bạn trong phần Nội dung thanh toán. Đơn hàng sẽ đươc giao sau khi tiền đã chuyển.</p>
                </div>
                <hr>
                <div class="form-check mx-3">
                    <input class="form-check-input" type="radio" id="check1" name="pttt" value="1" checked>
                    <label style="font-weight: 600;" class="form-check-label"> Trả tiền mặt khi nhận hàng</label>
                </div>
                <div>
                    <button class="dat-hang" type="submit" name="thanhtoansubmit">ĐẶT HÀNG</button>
                </div>
            </div>
        </div>
    </form>
</div>
<style>
    .header-container {
        position: fixed;
        width: 100%;
        z-index: 999;
        position: relative;
    }

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
        width: 700px;
        margin: 20px;
    }

    .container-left input {
        padding: 10px;
        width: 670px;
        height: 39px;
        font-size: 15px;
        border: 1px solid rgb(255, 0, 0);
        border-radius: 5px;
        outline: none;
        /* Loại bỏ đường viền khi focus (nếu không muốn) */
        margin-top: 20px;
    }

    /* Định dạng placeholder trong input */
    .container-left input::placeholder {
        color: #999;
        /* Màu sắc của văn bản placeholder */
    }

    /* Định dạng input khi focus */
    .container-left input:focus {
        border-color: rgb(255, 0, 0);
        /* Đổi màu viền khi focus */
        box-shadow: 0 0 5px rgb(255, 0, 0);
        /* Hiệu ứng bóng khi focus */
    }

    .container-right {
        width: 500px;
        border: 2px solid rgb(255, 0, 0);
        margin: 20px
    }

    .d-flex {
        display: flex;
        justify-content: center;
        /* Căn giữa theo chiều ngang */
        align-items: center;
        /* Căn giữa theo chiều dọc */
    }

    .total-table {
        width: 100%;
        /* Đặt chiều rộng bảng là 100% */
        border-collapse: collapse;
        /* Gộp đường viền giữa các ô trong bảng */
    }

    /* Định dạng phần tử th trong bảng */
    .total-table th,
    .total-table td {
        text-align: left;
        /* Căn trái nội dung của các ô trong bảng */
        padding: 10px;
        /* Khoảng cách giữa nội dung và biên của các ô trong bảng */
    }

    .dat-hang {
        width: 124px;
        height: 39px;
        background-color: rgb(255, 0, 0);
        color: white;
        border: 1px solid rgb(255, 0, 0);
        font-size: 15px;
        text-align: center;
        margin-left: 20px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    .mt-{
        margin-top: 120px!important;
    }
</style>