<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
        extract($_SESSION['s_user']);
        $html_account='<a href="index.php?pg=myaccount_conform"><img src="Layout/img/circle-user-solid.svg" width="100%" alt=""></a>
        <a href="index.php?pg=logout">Thoát</a>';

    }else{
        $html_account='<a href="index.php?pg=dangnhap"><img src="Layout/img/circle-user-solid.svg" width="100%" alt=""></a>';
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TRANG CHỦ</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="layout/index.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="header-container">
    <div class="container-fluid text-white d-flex justify-content-center" style="background-color: #0000; height: 80px;">
      <div class="m-3 "><a href="index.php"><img src="Layout/img/logofusion123-removebg.png" alt="" width="100px" class="mt-1"></a></div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6 icon1">
        <path fill-rule="evenodd" d="M10.5 3.75a6.75 6.75 0 100 13.5 6.75 6.75 0 000-13.5zM2.25 10.5a8.25 8.25 0 1114.59 5.28l4.69 4.69a.75.75 0 11-1.06 1.06l-4.69-4.69A8.25 8.25 0 012.25 10.5z" clip-rule="evenodd" />
      </svg>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="index.php">Trang chủ</a></div>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="index.php?pg=sanpham">Sản phẩm</a></div>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="index.php?pg=bosuutap.php">Bộ Sưu Tâp</a></div>
      <div class=" m-3 menu text-body" style=" font-size: 17px;"><a href="index.php?pg=tintuc.php">Tin Tức</a></div>
      <div class="mt-3">
        <form action="index.php?pg=sanpham" method="post" class="timkiem ml-3" id="search-box">
          <input type="text" id="search-text" name="kyw" placeholder="Tìm kiếm sản phẩm" class="mt-3" required>
          <!-- <img src="Layout/img/magnifying-glass.png" alt="" width="20px" height="20px" class="icon" type="submit" name="timkiem"> -->
          <!-- <input type="submit" name="timkiem" > -->
          <button id="search-btn" name="timkiem"><i class="fa-solid fa-magnifying-glass fa-lg" width="20px" height="20px" class="icon"></i></button>
        </form>
      </div>  
      <div style="justify-content: center; padding: 30px;" class="user d-flex m-7">
        <a href="index.php?pg=viewcart"><img src="Layout/img/cart-shopping-solid.svg" width="100%" alt=""></a>
        <?=$html_account;?>
      </div>
    </div>
  </div>
<style>
  #search-box{
    border-radius: 30px;
  }
  #search-box #search-text{
    border: none;
    outline: none;
    background: none;
    padding: 10px 15px;
    font-size: 14px;
  }
  #search-box #search-btn{
    background-color: #fff;
    cursor: pointer;
    border: none;
    padding: 15px;
    border-radius: 50%;
  }
</style>