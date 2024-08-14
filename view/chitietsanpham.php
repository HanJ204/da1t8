<?php
extract($spchitiet);
$html_sp_lienquan = showsp($splienquan);
?>
<div class="container" style="position: relative;margin-top: 40px;">
    <div class="row">
        <div class="col-6" style="position: relative;margin-top: -40px;">
            <img style="width: 100%; height: auto;" src="layout/img/<?= $img ?>" alt="" id="mainImage">
            <div class="d-flex">
                <img style="width: 150px; height: 140px; cursor: pointer;" src="layout/img/bst_1.jpg" alt="" onclick="changeImage('layout/img/bst_1.jpg')">
                <img style="width: 150px; height: 140px; cursor: pointer;" src="layout/img/bst_2.jpg" alt="" onclick="changeImage('layout/img/bst_2.jpg')">
                <img style="width: 150px; height: 140px; cursor: pointer;" src="layout/img/bst_3.jpg" alt="" onclick="changeImage('layout/img/bst_3.jpg')">
                <img style="width: 150px; height: 140px; cursor: pointer;" src="layout/img/bst_4.jpg" alt="" onclick="changeImage('layout/img/bst_4.jpg')">
            </div>
        </div>
        <div class="col-6">
            <h4><?= $name ?></h4>
            <span style="color: #bd0000; font-size:24px;font-weight: 600;line-height: 34px;"><?= number_format($price, 0, ',', '.') ?>đ</span>
            <div style="background-color: #fac406;width: 42px;height: 16px;border-radius: 20px;margin-top: 10px;" class="d-flex">
                <img style="width: 10px;height: 10px ;margin-top: 3px;margin-left: 2px;" src="layout/img/star.svg" alt="">
                <p style="color: aliceblue;font-size: 13px;margin-top: -2px;margin-left: 5px;">5.0</p>
            </div>
            <div style="position: relative; margin-top: -23px;margin-left: 50px;">
                <span style="color: #7b7d85; font-size: 13px; ">Lượt xem: <?= $view ?></span>
            </div>
            <div style="margin-top: 40px;">
                <p style="font-weight: 600">Màu Sắc</p>
                <div style="width: 120px;height: 60px; background-color: #C9B7A6; margin-top: -60px;margin-left: 105px;">
                </div>
                <div style="width: 120px;height: 60px; background-color: #5A677A; margin-top: -60px;margin-left: 255px;">
                </div>
                <div style="width: 120px;height: 60px; background-color: #EFEFEF; margin-top: -60px;margin-left: 405px;">
                </div>
                <div style="width: 120px;height: 60px; background-color: #849090; margin-top:  25px;margin-left: 105px;">
                </div>
            </div>
            <div style="margin-top: 40px;">
                <p style="font-weight: 600">Kích Thước</p>
                <div class="d-flex" style="margin-top: -59px;margin-left: 95px;">
                    <div style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
                        S</div>
                    <div style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
                        M</div>
                    <div style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
                        L</div>
                    <div style="width: 90px; height: 43px; background-color: #EFEFEF; text-align: center; line-height: 43px; font-weight: 500;margin: 10px;">
                        XL</div>
                </div>
            </div>
            <div style="margin-top: 40px;">
                <p style="font-weight: 600">Số Lượng</p>
            </div>
            <div class="mt-3 d-flex">
                <form action="index.php?pg=addcart" method="post">
                    <input type="hidden" name="idpro" value="<?= $id ?>">
                    <input type="hidden" name="name" value="<?= $name ?>">
                    <input type="hidden" name="img" value="<?= $img ?>">
                    <input type="hidden" name="price" value="<?= $price ?>">
                    <div class="quantity-container" style="margin-top: -50px;margin-left: 105px;">
                        <input class="quantity-input" name="soluong" type="number" value="1" id="quantity" min="1" max="10">
                    </div>
                    <button class="m-2 mt-3 custom-button" type="submit" name="addcart">Thêm vào giỏ hàng</button>
                </form>
                <button class="m-2" style="width: 250px;height: 45px; font-weight:500; background-color:#C81D31 ; color:#fff;border-color:#C81D31 ;">Mua
                    ngay</button>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="text-center p-3 mt-4">
                    <h4>------------------------------------------THÔNG TIN SẢN PHẨM--------------------------------------------
                    </h4>
                </div>
                <div class="col-9">
                    <div>
                        <p style="font-size: 20px;font-weight: 500;">Áo Thun Dài Tay Nam 5S Fashion, In Chữ Combination ATO22001
                        </p>
                        <p>Áo Thun Dài Tay Nam 5S Fashion, In Chữ Combination ATO22001
                            sở hữu kiểu dáng Slim fit vừa vặn, tôn dáng với khả năng giữ ấm cơ thể cực tốt.
                            Áo thun tay dài có đa dạng màu sắc, chủ yếu là các màu basic, dễ mặc và dễ phối.
                            Thiết kế trẻ trung với điểm nhấn là hình in thêu chữ Combination hiện đại.</p>
                    </div>
                    <div class="d-flex">
                        <img style="height:400px;width: 470px;" src="layout/img/bst_1.jpg" alt="">
                        <img style="height:400px;width: 470px;" src="layout/img/bst_2.jpg" alt="">
                    </div>
                    <div>
                        <p style="font-size: 20px;font-weight: 500;">Chất liệu Viscose</p>
                        <p>Chất liệu Viscose hay còn được gọi là sợi lụa nhân tạo, là một
                            trong những dòng chất liệu cao cấp của 5S Fanshion . Viscose được
                            tổng hợp từ chất xơ của sợi Cellulose làm từ bột ỗ như cây sồi, cây
                            thông, bạch đàn tre... giúp cấu trúc của loại vải này gần như tương
                            tự với Cotton. Tuy nhiên, đặc tính nổi trợi hơn nằm ở độ mềm mịn, thân
                            thiện với làn da cũng như môi trường sống xung quanh.</p>
                        <img style="width: 923px;height: 700px;" src="layout/img/Vcv9AZoqCNQL4qEJyIwD2OuA8Wwu3CNOQci6jNZO.jpg" alt="">
                        <img style="width: 923px;height: 700px;" src="layout/img/i4woB2cwAmb0ells9fXgaxRoIjC8YCMuPoNxGUDi.jpg" alt="">
                        <img style="width: 923px;height: 1000px;" src="layout/img/hd_baoquan.jpg" alt="">
                        <img style="width: 923px;height: 1000px;" src="layout/img/cskh2.jpg" alt="">
                        <img style="width: 923px;height: 1000px;" src="layout/img/ve_fanshion.jpg" alt="">
                    </div>
                </div>
            </div>
            <hr>
            <div id="binhluan">
            <iframe src="view/binhluan.php?idpro=<?=$id?>" width="100%" frameborder="0"></iframe>
            </div>
            <div class="p-3 mt-3">
                <h5 class="m-3" style=" text-decoration: underline;">SẢN PHẨM LIÊN QUAN</h5>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <?= $html_sp_lienquan; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .quantity-container {
        display: flex;
        align-items: center;
    }

    .quantity-input {
        width: 40px;
        text-align: center;
        margin: 0 10px;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        outline: none;
    }

    .quantity-button {
        cursor: pointer;
        font-size: 18px;
        user-select: none;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #fff;
        transition: background-color 0.3s;
    }

    .quantity-button:hover {
        background-color: #f0f0f0;
    }

    .custom-button {
        width: 250px;
        height: 45px;
        border: 2px solid #C81D31;
        font-weight: 500;
        background-color: #fff;
        transition: background-color 0.3s;
    }

    .custom-button:hover {
        background-color: #C81D31;
        color: #fff;
        /* Thêm dòng này để làm cho màu chữ trắng khi hover */
    }
</style>