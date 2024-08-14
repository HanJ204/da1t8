<div class="container-fluid p-0 ">
    <div class="row">
        <div class="col-sm-6">
            <img src="layout/img/dk.png" alt="" style="height:510px ; width: 80%;">
        </div>
        <div class="col-sm-6 mt-3">
            <div class="dangnhap">
                <a href="index.php?pg=dangky"><button type="button" class="btn mt-2 button1">Register</button></a>
                <a href="index.php?pg=dangnhap"><button type="button" class="btn btn-danger mt-2 button1">Login</button></a>
            </div>
            <div class="trai">
                <h5 style="display: inline-block;">WELCOME TO </h5>
                <img style="width: 150px;height: 30px;" src="layout/img/logo1.png" alt="">
            </div>
            <div class="text1">
                <p style="display: inline-block; color:#8F1D1D; font-weight: 500;">5S FASHINON</p>
                <p style="display: inline-block;">- Sản phẩm chất lương hàng đầu Việt Nam </p>
                <p style="color: red; padding-left:50px;">
                    <?php
                    if (isset($_SESSION['tb_dangnhap']) && ($_SESSION['tb_dangnhap'] != "")) {
                        echo $_SESSION['tb_dangnhap'];
                        unset($_SESSION['tb_dangnhap']);
                    }
                    ?>
                </p>
            </div>
            <form class="form-dangnhap" action="index.php?pg=login" method="post">
                <input type="text" id="username" name="username" placeholder="Tên đăng nhập"> <br>
                <input type="text" id="password" name="password" placeholder="mật khẩu"> <br>
                <div>
                    <div class="form-check trai1 mt-2">
                        <input class="form-check-input " type="checkbox" id="check1" name="option1" value="something" checked>
                        <label class="form-check-label ">Nhớ mât khẩu</label>
                        <p class="text11" style="display: inline-block;">Quên mật khẩu?</p>
                    </div>
                </div>
                <input class="btn-dy" type="submit" name="dangnhap" value="Đăng Nhập">
                <div class="dy">
                    <p class="m-1" style="display: inline-block;">Bạn chưa có tài khoản? </p>
                    <p style="display: inline-block;color: #033AFF;"><a href="index.php?pg=dangky" style="color: #033AFF;">Đăng ký</a></p>
                    <p class="m-0" style="display: inline-block;">ngay</p>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>

<style>
    .row {
        margin-left: calc(12 * var(--bs-gutter-x));
    }

    .content-container {
        margin-top: 150px;
        /* Khoảng cách giữa header và nội dung */
    }

    .dangnhap {
        background-color: #9B1205;
        height: 55px;
        width: 190px;
        border-radius: 20px 20px;
    }

    .button1 {
        position: relative;
        margin-left: 10px;
        color: white;
        border-radius: 10px 10px;
    }

    .trai {
        margin-left: -70px;
        margin-top: 10px;
    }

    .form-dangnhap input[type="text"] {
        width: 400px;
        height: 35px;
        margin-left: -110px;
        margin-top: 20px;
        border-radius: 10px 10px;
    }

    .trai1 {
        position: relative;
        margin-left: -108px;
    }

    .btn-dy {
        color: white;
        background-color: #990D23;
        width: 150px;
        height: 45px;
        margin-top: 10px;
        margin-left: 17px;
        border: #990D23;
        border-radius: 10px 10px;
    }

    .btn-dy:hover {
        background-color: #CC0000;
    }

    .dy {
        margin-left: -40px;
        margin-top: 10px;
    }

    .text11 {
        margin-left: 150px;
    }

    .text1 {
        margin-left: -100px;
    }
</style>