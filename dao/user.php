<?php
function user_insert_id($username, $password, $ten, $diachi, $email, $dienthoai)
{
    $sql = "INSERT INTO user(username, password, ten,diachi, email, dienthoai) VALUES (?, ?, ?, ?, ?, ?)";
    return pdo_execute_id($sql, $username, $password, $ten, $diachi, $email, $dienthoai);
}
function user_insert($username, $password, $email, $dienthoai)
{
    $sql = "INSERT INTO user(username, password, email, dienthoai) VALUES (?, ?, ?, ?)";
    pdo_execute($sql, $username, $password, $email, $dienthoai);
}
function user_update($username, $email, $diachi, $dienthoai, $role, $id)
{
    $sql = "UPDATE user SET username=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql, $username, $email, $diachi, $dienthoai, $role, $id);
}
function get_user($id)
{
    $sql = "Select * from user where id=? ";
    return pdo_query_one($sql, $id);
}
function checkuser($username, $password)
{
    $sql = "Select * from user where username=? and password=?";
    return pdo_query_one($sql, $username, $password);
    // if(is_array($kq)&&(count($kq))){
    //     return $kq["id"];
    // }else{
    //     return 0;
    // }
}
function user_all()
{
    $sql = "SELECT * FROM user ORDER BY id DESC";
    return pdo_query($sql);
}
function show_all_useradmin($dsdm)
{
    $html_useradmin = '';
    $i = 1;
    foreach ($dsdm as $sp) {
        extract($sp);
        $html_useradmin .= '<tr>
                            <td>' . $i . '</td>
                            <td>' . $username . '</td>
                            <td>' . $password . '</td>
                            <td>' . $ten . '</td>
                            <td>' . $diachi . '</td>
                            <td>' . $email . '</td>
                            <td>' . $dienthoai . '</td>
                            <td>' . $role . '</td>
                            <td>
                                <a href="index.php?pg=userupdate&id=' . $id . '" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                                <a href="index.php?pg=deluser&id=' . $id . '" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
                            </td>
                        </tr>';
        $i++;
    }
    return $html_useradmin;
}
function user_new($limi)
{
    $sql = "SELECT * FROM user ORDER BY id DESC limit " . $limi;
    return pdo_query($sql);
}
function user_delete($id)
{
    $sql = "DELETE FROM user WHERE  id=?";
    pdo_execute($sql, $id);
}
function get_user_by_id($id)
{
    $sql = "SELECT * FROM user WHERE id=?";
    return pdo_query_one($sql, $id);
}
function update_user($username, $password, $ten, $email, $diachi, $dienthoai, $role, $id)
{
    $sql = "UPDATE user SET username=?,password=?, ten=?,email=?,diachi=?,dienthoai=?,role=? WHERE id=?";
    pdo_execute($sql, $username, $password, $ten, $email, $diachi, $dienthoai, $role, $id);
}
function insert_user($username, $password, $ten, $email, $diachi, $dienthoai, $role)
{
    $sql = "INSERT INTO user(username, password, ten, email, diachi, dienthoai, role) VALUES (?,?,?,?,?,?,?)";
    pdo_execute($sql, $username, $password, $ten, $email, $diachi, $dienthoai, $role);
}
