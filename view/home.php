<?php
  $html_dssp_new=showsp($dssp_new);
  $html_dssp_view=showsp($dssp_view);
  $html_dssp_noibat=showsp($dssp_noibat);
?>
<div class="container">
  <div class="row">
    <div class="col-12 p-0 mt-3">
      <img src="layout/img/slider.jpg" style="width: 100%;height: auto;" alt="">
    </div>
    <div class="p-2 text-center text-white" style="background-color: #990D23;height: 50px;">
      <h5>THOẢI THÍCH MUA SẮM CÙNG – 5S FASHION</h5>
    </div>
  </div>
  <div class="container mt-5">
    <div class="mt-3" style=" text-decoration: underline;">
      <h5>BỘ SƯU TẬP THU ĐÔNG</h5>
    </div>
    <div class="row">
      <div class="col-12">
        <img style="width: 100%; height: auto;" src="layout/img/danhmuc2.png" alt="">
      </div>
    </div>
  </div>
  <div class="container mt-3 justify-content-center">
    <div class="row">
      <?= $html_dssp_noibat;?>
    </div>
  </div>
  <div class="container mt-5">
    <div class="mt-3" style=" text-decoration: underline; text-align: right;">
      <h5>BỘ SƯU TẬP CÔNG SỞ</h5>
    </div>
    <div class="row">
      <div class="col-12">
        <img style="width: 100%; height: auto;" src="layout/img/slider2.png" alt="">
      </div>
    </div>
  </div>
  <div class="container mt-3 justify-content-center">
    <div class="row">
      <?= $html_dssp_new;?>
    </div>
  </div>
  <div class="container mt-5">
    <div class="mt-3" style=" text-decoration: underline;">
      <h5>BỘ SƯU TẬP MÙA HÈ</h5>
    </div>
    <div class="row">
      <div class="col-12">
        <img style="width: 100%; height: auto;" src="layout/img/slider5.png" alt="">
      </div>
    </div>
  </div>
  <div class="container mt-3 justify-content-center">
    <div class="row">
      <?= $html_dssp_view;?>
    </div>
  </div>
  <div class=" container text-center p-2 mt-4">
    <!-- <h2>5S FASHION</h2>
    <br> -->
    <!-- <div class="row">
      <div>
        <img style="width: 100%;height: auto;" src="layout/img/slider10.png" alt="">
      </div>
      <div class="mt-5">
        <img style="width: 100%;height: auto;" src="layout/img/Screenshot 2023-11-04 190942.png" alt="">
      </div>
    </div> -->
  </div>
</div>