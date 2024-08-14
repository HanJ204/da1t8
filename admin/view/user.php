<?php
$html_useradmin = show_all_useradmin($user);
?>
<div class="main-content">
    <h3 class="title-page">
        User
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?pg=useradd" class="btn btn-primary mb-2">Thêm Người Dùng</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Người Dùng</th>
                <th>Password</th>
                <th>Tên</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Điện Thoại</th>
                <th>Vai Trò</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?= $html_useradmin; ?>
        </tbody>
        <tfoot>
            <tr>
                <th>STT</th>
                <th>Tên Danh Mục</th>
                <th>Hình</th>
                <th>Thao Tác</th>
            </tr>
        </tfoot>
    </table>
</div>
</div>
</div>
<script src="assets/js/main.js"></script>
<script>
    new DataTable('#example');
</script>