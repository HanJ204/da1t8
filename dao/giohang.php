<?php
   function cart_insert($idpro , $price, $name, $img, $soluong, $thanhtien, $idbill){
      $sql = "INSERT INTO cart(idpro, price, name, img, soluong, thanhtien, idbill) VALUES ('$idpro' , '$price', '$name','$img', '$soluong', '$thanhtien', '$idbill')";
      pdo_execute_returnid($sql);
   }
   function viewcart(){
      $html_cart='';
      $i=1;
      foreach ($_SESSION['giohang'] as $idd=> $sp) {
         extract($sp);
         $tt=(Int)$price*(Int)$soluong;
         $xoagiohang = "index.php?pg=xoagiohang&idd=".$idd;
         $html_cart.='<tr>
                        <td>'.$i.'</td>
                        <td><img src="layout/img/'.$img.'" alt="" style="width: 100px;"></td>
                        <td style="color:#990D23 ;">'.$name.'</td>
                        <td class="item-1">'.$price.' ₫</td>
                        <td class="item-1 text-center">'.$soluong.'</td>
                        <td class="item-1">'.$tt.' ₫</td>
                        <td class="item-1"><a href="'.$xoagiohang.'">Xóa</a></td>
                     </tr>';
         $i++;
      }
      return $html_cart;
   }
   function thanhtoan(){
      $html_thanhtoan='';
      foreach ($_SESSION['giohang'] as $sp) {
         extract($sp);
         $tt=(Int)$price*(Int)$soluong;
         $html_thanhtoan.='<tr style="border-bottom: 1px solid #ddd; ">
                                 <td style="color: #990D23;" class="py-3 dinh-vi"><img src="layout/img/'.$img.'" alt="" style="width: 100px;"></td>
                                 <td class="total-item">'.$tt.'   ₫</td>
                           </tr>';
      }
      return $html_thanhtoan;
   }
   function hoanthanh(){
      $html_hoanthanh='';
      foreach ($_SESSION['giohang'] as $sp) {
         extract($sp);
         $tt=(Int)$price*(Int)$soluong;
         $html_hoanthanh.='<tr style="border-bottom: 1px solid #ddd; ">
                                 <td style="color: #990D23;" class="py-3 dinh-vi"><img src="layout/img/'.$img.'" alt="" style="width: 100px;"></td>
                                 <td class="total-item">'.$tt.'   ₫</td>
                           </tr>';
      }
      return $html_hoanthanh;
   }
   function get_tongdonhang(){
      $tong=0;
      foreach ($_SESSION['giohang'] as $sp) {
         extract($sp);
         $tt=(Int)$price*(Int)$soluong;
         $tong+=$tt;
      }
      return $tong;
   }
?>