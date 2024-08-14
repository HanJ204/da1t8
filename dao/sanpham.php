<?php
function get_banner_1(){
   $sql = "SELECT * FROM banner WHERE vitri = 1";
   return pdo_query($sql);
}

function get_dssp_new($limi)
{
   $sql = "SELECT * FROM sanpham ORDER BY id DESC limit " . $limi;
   return pdo_query($sql);
}
function get_dssp_view($limi)
{
   $sql = "SELECT * FROM sanpham ORDER BY view DESC limit " . $limi;
   return pdo_query($sql);
}
function get_dssp_noibat($limi)
{
   $sql = "SELECT * FROM sanpham WHERE label = 1 LIMIT " . $limi;
   return pdo_query($sql);
}

function get_dssp_lienquan($iddm, $id, $limi)
{
   $sql = "SELECT * FROM sanpham WHERE iddm=? AND id<>? ORDER BY id DESC limit " . $limi;
   return pdo_query($sql, $iddm, $id);
}
function get_dssp($kyw, $iddm, $limi, $offset = 0)
{
   $sql = "SELECT * FROM sanpham WHERE 1";
   if ($iddm > 0) {
      $sql .= " AND iddm=" . $iddm;
   }
   if ($kyw != "") {
      $sql .= " AND name like '%" . $kyw . "%'";
   }

   $sql .= " ORDER BY id DESC";
   if($limi > 0){
        $sql .= " LIMIT $offset, $limi";
    }
   return pdo_query($sql);
}

function hienthisotrang($tongsp_nolimit){
   $sotrang = ceil($tongsp_nolimit/SO_SP_TRANG);
   $dsstrang = "";
   for ($i=1; $i <= $sotrang; $i++) { 
       $dsstrang .= "<li class='page-item'><a class='page-link' href='?pg=sanpham&page=".$i."'>".$i."</a></li>";
   }
   return $dsstrang;
}
function get_sp_by_id($id)
{
   $sql = "SELECT * FROM sanpham WHERE id=?";
   return pdo_query_one($sql, $id);
}
function sanpham_insert($name, $img, $price, $iddm)
{
   $sql = "INSERT INTO sanpham(name, img, price, iddm) VALUES (?,?,?,?)";
   pdo_execute($sql, $name, $img, $price, $iddm);
}
function get_img($id)
{
   $sql = "SELECT img FROM sanpham WHERE  id=?";
   $getimg = pdo_query_one($sql, $id);
   return $getimg['img'];
}
function sanpham_delete($id)
{
   $sql = "DELETE FROM sanpham WHERE  id=?";
   // if (is_array($id)) {
   //    foreach ($id as $ma) {
   //       pdo_execute($sql, $ma);
   //    }
   // } else {
      pdo_execute($sql, $id);
   // }
}
function sanpham_update($name, $img, $price, $iddm, $id){
   if($img!=""){
       $sql = "UPDATE sanpham SET name=?,img=?,price=?,iddm=? WHERE id=?";
       pdo_execute($sql,$name, $img, $price, $iddm, $id);
   }else{
       $sql = "UPDATE sanpham SET name=?,price=?,iddm=? WHERE id=?";
       pdo_execute($sql,$name, $price, $iddm, $id);
   }
}

function show_banner_1($dsbn){
   $html_dsbn = '';
    // Kiểm tra xem $dsbn có phải là một mảng không rỗng
    if (!empty($dsbn)) {
        // Lấy thông tin của banner từ $dsbn
        $html_dsbn .= '' . $dsbn['urlHinh'] . '';
    }
    return $html_dsbn;
}

function showsp($dssp)
{
   $html_dssp = '';
   foreach ($dssp as $sp) {
      extract($sp);
      $link = "index.php?pg=chitietsanpham&idpro=" . $id;
      $html_dssp .= '<div class="col-3">
                        <div class="card">
                           <div class="body-card">
                           <a href="' . $link . '">
                              <img src="layout/img/' . $img . '" alt="" class="w-100">
                           </a>
                           <div class="m-3">
                              <p>' . $name . '</p>
                              <p style="font-weight: 500; color: rgb(249, 5, 5);">' . number_format($price, 0, ',', '.') . ' đ</p>
                              <div class="button_sp1">
                                 <form action="index.php?pg=addcart" method="post">
                                    <input type="hidden" name="idpro" value="' . $id . '"> 
                                    <input type="hidden" name="name" value="' . $name . '">
                                    <input type="hidden" name="img" value="' . $img . '">
                                    <input type="hidden" name="price" value="' . $price . '">  
                                    <input type="hidden" name="soluong" value="1">
                                    <button type="submit" name="addcart">Thêm Giỏ Hàng</button>
                                 </form>
                              </div>
                           </div>
                           </div>
                        </div>
                     </div>';
   }
   return $html_dssp;
}
function showsp_admin($dssp)
{
   $html_dssp = '';
   $i = 1;
   foreach ($dssp as $sp) {
      extract($sp);
      $html_dssp .= '<tr>
                        <td>' . $i . '</td>
                        <td><img src="' . IMG_PATH_ADMIN . $img . '" alt="" width="150px"></td>
                        <td>' . $name . '</td>
                        <td>' . $price . '</td>
                        <td>
                        <a href="index.php?pg=sanphamupdate&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i>Sửa</a>
                        <a href="index.php?pg=delproduct&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                        </td>
                     </tr>';
      $i++;
   }
   return $html_dssp;
}
