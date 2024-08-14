<?php
$html_dmadmin = show_all_dmadmin($danhmuc);
?>
<div class="main-content">
    <h3 class="title-page">
        Danh mục
    </h3>
    <div class="d-flex justify-content-end">
        <a href="index.php?pg=danhmucadd" class="btn btn-primary mb-2">Thêm danh mục</a>
    </div>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên Danh Mục</th>
                <th>Hình</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <?= $html_dmadmin; ?>
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