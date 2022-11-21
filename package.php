<?php 
   include 'include/header.php';
   // include('model.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Package</title>
</head>
<body>
    <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-2.png) no-repeat">
      <h1 style ="text-align:center;">Các gói</h1>
      <div class="note-header">
         <p>
         Loong Boong Homestay<br>
         172 Nguyễn Tri Phương, Hội An, Quảng Nam.
         </p>
      </div>
   </div>

   <!-- packages section starts  -->

   <section class="packages">
         <h1 class="heading-title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">ĐIỂM ĐẾN <span>NỔI BẬT</span></h1>
         <?php  
            $listP = selectLocation();
            foreach ($listP as $p) {
         ?>
            <div class="diadiem" id="">
               <p class="title">Địa điểm nổi bật ở <span><?php echo($p['name']) ?></span></p>
               <div class="box-container">
                  <?php  
                     $proId = $p['id_location'];
                     $listL = getLocateByProId($proId);
                     foreach ($listL as $l) {
                  ?>
                     <div class="box">
                        <div class="image">
                           <img src="images/<?php echo($l['images']) ?>" alt="">
                        </div>
                        <div class="content">
                           <h3><?php echo($l['homestay_name']) ?></h3>
                           <p><?php echo($l['descript']) ?></p>
                        </div>
                        <div class="divbtn">
                           <a href="book.php" class="btn">Đặt ngay</a>
                        </div>
                     </div>
                  <?php } ?>
               </div>
            </div>
         <?php } ?>
   </section>

      <!-- packages section ends -->

</body>
</html>
<?php
    include 'include/footer.php';
?>