<div class="main-content">
    <h3 class="title-page">
        Thêm danh mục
    </h3>
    <form class="addPro" action="index.php?pg=adddanhmuc" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh danh mục</label>
            <div class="custom-file">
                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group">
            <label for="name">Home:</label>
            <input type="text" class="form-control" name="home" id="home" placeholder="Nhập Home">
        </div>
        <div class="form-group">
            <label for="name">Stt:</label>
            <input type="text" class="form-control" name="stt" id="stt" placeholder="Nhập Stt">
        </div>
        <div class="form-group">
            <button type="submit" name="adddanhmuc" class="btn btn-primary">Thêm danh mục</button>
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>