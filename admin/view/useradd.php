<div class="main-content">
    <h3 class="title-page">
        Thêm Người Dùng
    </h3>
    <form class="addPro" action="index.php?pg=adduser" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên Đăng Nhập:</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Nhập Tên Người Dùng">
        </div>
        <div class="form-group">
            <label for="name">Password:</label>
            <input type="text" class="form-control" name="password" id="password" placeholder="Nhập Home">
        </div>
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" name="ten" id="ten" placeholder="Nhập Tên">
        </div>
        <div class="form-group">
            <label for="name">Địa Chỉ:</label>
            <input type="text" class="form-control" name="diachi" id="diachi" placeholder="Nhập Địa Chỉ">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Nhập Email">
        </div>
        <div class="form-group">
            <label for="name">Điện Thoại:</label>
            <input type="text" class="form-control" name="dienthoai" id="dienthoai" placeholder="Nhập Điện Thoại">
        </div>
        <div class="form-group">
            <label for="name">Vai Trò:</label>
            <input type="text" class="form-control" name="role" id="role" placeholder="Nhập Vai Trò">
        </div>
        <div class="form-group">
            <button type="submit" name="adduser" class="btn btn-primary">Thêm Người Dùng</button>
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>