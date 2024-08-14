<?php
    $html_dm=showdm($dsdm);
    $html_dssp=showsp($dssp);
    if ($titlepage!="") $title=$titlepage;
    else $title="Sản phẩm"
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <img style="width: 100%; height: auto;" src="layout/img/slider8.jpg" alt="">
        </div>
    </div>
    <div class="container-fluid text-center mt-3">
        <h5>DANH MỤC SẢN PHẨM</h5>
    </div>
    <div class="container d-flex justify-content-center p-1">
        <?= $html_dm;?>
    </div>
    <div>
        <h5 class="m-3 "style=" text-decoration: underline; font-size:25px;"><?=$title?></h5>
    </div>
    <div class="container mt-3 justify-content-center my-5">
        <div class="row">
            <?= $html_dssp;?>
            <div class="d-flex justify-content-center">

                <nav>
                    <ul class="pagination">
                        <?=$hienthisotrang?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<style>
    .row{
        --bs-gutter-y: 1.5rem;
    }
</style>