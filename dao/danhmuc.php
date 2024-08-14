<?php
function danhmuc_all()
{
    $sql = "SELECT * FROM danhmuc ORDER BY stt DESC";
    return pdo_query($sql);
}
function showdm($dsdm)
{
    $html_dm= '';
    foreach ($dsdm as $dm) {
        extract($dm);
        $link= 'index.php?pg=sanpham&iddm='.$id;
        $html_dm.= '<div class="m-3 button_sp1">
                        <a href="'.$link.'">
                            <img src="layout/img/'.$img.'" alt="">
                            <p>'.$name.'</p>
                        </a>
                    </div>';
    }
    return $html_dm;
}
function showdm_admin($dsdm,$iddm)
{
    $html_dm= '';
    foreach ($dsdm as $dm) {
        extract($dm);
        if ($id===$iddm) {
            $se="selected";
        }else{
            $se="";
        }
        $html_dm.= '<option value="'.$id.'"'.$se.'>'.$name.'</option>';
    }
    return $html_dm;
}
function showdm_adminthem($dsdm)
{
    $html_dm= '';
    foreach ($dsdm as $dm) {
        extract($dm);
        $html_dm.= '<option value="'.$id.'">'.$name.'</option>';
    }
    return $html_dm;
}
function show_all_dmadmin($dsdm)
{
   $html_dmadmin = '';
   $i = 1;
   foreach ($dsdm as $sp) {
      extract($sp);
      $html_dmadmin .= '<tr>
                            <td>'.$i.'</td>
                            <td>'.$name.'</td>
                            <td><img src="' . IMG_PATH_ADMIN . $img . '" alt="" width="100px"></td>
                            <td>
                                <a href="index.php?pg=danhmucupdate&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?pg=deldanhmuc&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>';
      $i++;
   }
   return $html_dmadmin;
}

function get_name_dm($id){
    $sql = "SELECT name FROM danhmuc WHERE id=".$id;
    $kq=pdo_query_one($sql);
    return $kq["name"];
}
function danhmuc_insert($name, $home, $stt, $img)
{
   $sql = "INSERT INTO danhmuc(name, home, stt, img) VALUES (?,?,?,?)";
   pdo_execute($sql, $name, $home, $stt, $img);
}
function danhmuc_new($limi)
{
   $sql = "SELECT * FROM danhmuc ORDER BY id DESC limit " . $limi;
   return pdo_query($sql);
}
function danhmuc_delete($id)
{
   $sql = "DELETE FROM danhmuc WHERE  id=?";
    pdo_execute($sql, $id);
}
function get_img_dm($id)
{
   $sql = "SELECT img FROM danhmuc WHERE  id=?";
   $getimgdm = pdo_query_one($sql, $id);
   return $getimgdm['img'];
}
function danhmuc_update($name, $img, $home, $stt,$id){
    if($img!=""){
        $sql = "UPDATE danhmuc SET name=?,img=?,home=?,stt=? WHERE id=?";
        pdo_execute($sql,$name, $img, $home, $stt,$id);
    }else{
        $sql = "UPDATE danhmuc SET name=?,home=?,stt=? WHERE id=?";
        pdo_execute($sql,$name, $home, $stt,$id);
    }
 }
 function get_dm_by_id($id)
{
   $sql = "SELECT * FROM danhmuc WHERE id=?";
   return pdo_query_one($sql, $id);
}