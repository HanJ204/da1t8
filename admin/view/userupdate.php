<?php
if (is_array($user)&&(count($user)>0)) {
    extract($user);
    $idupdate=$id;
}
?>
<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Người Dùng
    </h3>
    <form class="addPro" action="index.php?pg=updateuser" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Tên Đăng Nhập:</label>
            <input type="text" class="form-control" name="username" value="<?=($username!="")?$username:"";?>" id="username" placeholder="Nhập Tên Người Dùng">
        </div>
        <div class="form-group">
            <label for="name">Password:</label>
            <input type="text" class="form-control" name="password" value="<?=($password!="")?$password:"";?>" id="password" placeholder="Nhập Home">
        </div>
        <div class="form-group">
            <label for="name">Tên:</label>
            <input type="text" class="form-control" name="ten" value="<?=($ten!="")?$ten:"";?>" id="ten" placeholder="Nhập Tên">
        </div>
        <div class="form-group">
            <label for="name">Địa Chỉ:</label>
            <input type="text" class="form-control" name="diachi" value="<?=($diachi!="")?$diachi:"";?>" id="diachi" placeholder="Nhập Địa Chỉ">
        </div>
        <div class="form-group">
            <label for="name">Email:</label>
            <input type="text" class="form-control" name="email" value="<?=($email!="")?$email:"";?>" id="email" placeholder="Nhập Email">
        </div>
        <div class="form-group">
            <label for="name">Điện Thoại:</label>
            <input type="text" class="form-control" name="dienthoai" value="<?=($dienthoai!="")?$dienthoai:"";?>" id="dienthoai" placeholder="Nhập Điện Thoại">
        </div>
        <div class="form-group">
            <label for="name">Vai Trò:</label>
            <input type="text" class="form-control" name="role" value="<?=($role!="")?$role:"";?>" id="role" placeholder="Nhập Vai Trò">
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$idupdate?>">
            <button type="submit" name="updateuser" class="btn btn-primary">Cập Nhật Người Dùng</button>
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>