<div class="container-fluid">
    <div class="tieu-de">
        <a class="tieu-de1" href="index.php?pg=viewcart"> Giỏ hàng </a>
        <a class="tieu-de1" href="index.php?pg=thanhtoan">> Đặt hàng ></a>
        <a class="tieu-de1 text-dark" href="index.php?pg=hoanthanh">Hoàn thành</a>
    </div>
    <div class="container" style="text-align: center;">
        <p><strong>Đặt Hàng Thành Công</strong></p>
        <p><strong>Mã đơn hàng:</strong> <?= (isset($madh)) ? $madh : "" ?></p>
        <p><strong>Tên người nhận:</strong> <?= $username ?></p>
        <p> <strong>Số điện thoại:</strong> <?= $dienthoai ?></p>
        <p> <strong>Địa chỉ giao hàng:</strong> <?= $diachi ?></p>
        <a href="index.php"><Strong>Quay về trang chủ</Strong></a>
    </div>

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
        margin: 20px
    }

    .container-left input {
        padding: 10px;
        width: 670px;
        height: 39px;
        font-size: 15px;
        border: 1px solid #b4975a;
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
        border-color: #81d742;
        /* Đổi màu viền khi focus */
        box-shadow: 0 0 5px #81d742;
        /* Hiệu ứng bóng khi focus */
    }

    .container-right {
        width: 500px;
        height: 545px;
        border: 2px solid #990d23;
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
        background-color: #b4975a;
        color: white;
        border: 1px solid #b4975a;
        font-size: 15px;
        text-align: center;
        margin-left: 20px;
        margin-top: 20px;
    }
</style>