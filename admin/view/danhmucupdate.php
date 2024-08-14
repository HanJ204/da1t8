<?php
if (is_array($dm)&&(count($dm)>0)) {
    extract($dm);
    $idupdate=$id;
    $imgpath=IMG_PATH_ADMIN.$img;
    if (is_file($imgpath)) {
        $img='<img src="'.$imgpath.'" width="100px">';
    }else{
        $img="";
    }
}
?>
<div class="main-content">
    <h3 class="title-page">
        Cập Nhật Danh Mục
    </h3>
    <form class="addPro" action="index.php?pg=updatedanhmuc" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Ảnh danh mục</label>
            <div class="custom-file">
                <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                <?=$img?>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" value="<?=($name!="")?$name:"";?>" id="name" placeholder="Nhập tên danh mục">
        </div>
        <div class="form-group">
            <label for="name">Home:</label>
            <input type="text" class="form-control" name="home" value="<?=($home!="")?$home:"";?>" id="home" placeholder="Nhập Home">
        </div>
        <div class="form-group">
            <label for="name">Stt:</label>
            <input type="text" class="form-control" name="stt" value="<?=($stt!="")?$stt:"";?>" id="stt" placeholder="Nhập Stt">
        </div>
        <div class="form-group">
            <input type="hidden" name="id" value="<?=$idupdate?>">
            <button type="submit" name="updatedanhmuc" class="btn btn-primary">Cập Nhật Danh Mục</button>
        </div>
    </form>
</div>

<script>
    new DataTable('#example');
</script>