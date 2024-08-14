<?php
session_start();
include "../dao/pdo.php";
include "../dao/binhluan.php";
if (isset($_GET['idpro'])) {
    // echo $_GET['idpro'];
    $idpro = $_GET['idpro'];
}
if (isset($_POST['guibinhluan'])) {
    $idpro = $_POST['idpro'];
    $noidung = $_POST['noidung'];
    $ngaybinhluan = date('H:i:s d/m/Y');
    $iduser = $_SESSION['s_user']['id'];
    binhluan_insert($iduser, $idpro, $noidung, $ngaybinhluan);
}
$dsbl = binhluan_select_all();
$html_bl = "";
foreach ($dsbl as $bl) {
    extract($bl);
    $html_bl .= '<p>
                    '.$noidung.'
                    <br>
                    '.$iduser.' ('.$ngaybinhluan.')
                </p>';
}
?>
<h3>Bình luận</h3>
<?php
if (isset($_SESSION['s_user']) && (count($_SESSION['s_user']) > 0)) {
?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <input type="hidden" name="idpro" value="idpro">
        <textarea rows="5" name="noidung" cols="100%"></textarea><br>
        <button type="submit" name="guibinhluan">Gửi bình luận</button>
    </form>
<?php
} else {
    $_SESSION['trang'] = "chitietsanpham";
    $_SESSION['idpro'] = $_GET['idpro'];
    echo "<a href='../index.php?pg=dangnhap'target='_parent'>Bạn phải đăng nhập mới được bình luận</a><br>";
}
?>
<div>   
    <?=$html_bl?>
</div>