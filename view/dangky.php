<div class="container-fluid p-0">
    <div class="row">
        <div class="col-sm-6">
            <img src="layout/img/dk.png" alt="" style="height:510px ; width: 80%;">
        </div>
        <div class="col-sm-6 mt-3">
            <div class="dangnhap">
                <button type="button" class="btn btn-danger mt-2 button1">Register</button>
                <a href="index.php?pg=dangnhap"><button type="button" class="btn mt-2 button1">Login</button></a>
            </div>
            <div class="trai">
                <h5 style="display: inline-block;">WELCOME TO </h5>
                <img style="width: 150px;height: 30px;" src="layout/img/logo1.png" alt="">
            </div>
            <div class="text1">
                <p style="display: inline-block; color:#8F1D1D; font-weight: 500;">5S FASHINON</p>
                <p style="display: inline-block;">- Sản phẩm chất lương hàng đầu Việt Nam </p>
            </div>

            <form class="form-dangky" action="index.php?pg=adduser" method="post">
                <input name="username" id="ten" value="" type="text" placeholder="Tên đăng nhập" required> <br>
                <input name="password" id="pass" value="" type="password" placeholder="Mật khẩu" required><br>
                <input name="repassword" id="pass" value="" type="password" placeholder="Nhập mật khẩu" required><br>
                <input name="dienthoai" type="text" placeholder="phone" id="Số điện thoại" required><br>
                <input name="email" type="text" placeholder="email" id="Email"><br>
                <div class="form-check trai1 mt-2">
                    <input class="form-check-input " type="checkbox" id="check1" name="option1" value="something" checked>
                    <label class="form-check-label">Đồng ý với điều khoản của chúng tôi</label>
                </div>
                <input class="btn-dy" type="submit" name="dangky" value="ĐĂNG KÍ">
            </form>

            <script>
                function validateForm() {
                    var ten = document.getElementById("ten").value;
                    var pass = document.getElementById("pass").value;
                    var phone = document.getElementById("phone").value;
                    var mail = document.getElementById("mail").value;

                    if (ten === "" || pass === "" || phone === "" || mail === "") {
                        alert("Vui lòng điền đầy đủ thông tin");
                        return false;
                    }

                    if (!document.getElementById("check1").checked) {
                        alert("Vui lòng đồng ý với điều khoản");
                        return false;
                    }

                    // Các kiểm tra khác nếu cần

                    return true; // Nếu mọi thứ đều hợp lệ
                }
            </script>


        </div>
    </div>
</div>



<script>
    function redirectTo(url) {
        window.location.href = url;
    }
</script>

<style>
    .row{
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
        margin-left: -50px;
        margin-top: 10px;
    }

    .form-dangky input[type="text"] {
        width: 400px;
        height: 35px;
        margin-left: -90px;
        margin-top: 20px;
        border-radius: 10px 10px;
    }

    .form-dangky input[type="password"] {
        width: 400px;
        height: 35px;
        margin-left: -90px;
        margin-top: 20px;
        border-radius: 10px 10px;
    }

    .trai1 {
        position: relative;
        margin-left: -86px;
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

    .text1 {
        margin-left: -100px;
    }
</style>