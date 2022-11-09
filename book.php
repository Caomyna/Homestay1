<?php 
    include 'include/header.php';
    include 'admin/db/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
</head>
<body>
<!-- <div class="heading" style="background:url(http://localhost/homestayWeb/images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div> -->

<div class="heading" style="background:url(https://dsdigkpw1b1xa.cloudfront.net/frontend/images/vietnam-trip-4.jpg) no-repeat">
   <h1>Đặt vé ngay</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Hãy nhập thông tin của bạn!</h1>

   <form action="book_db.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Họ và tên :</span>
            <input type="text" class="inputName" placeholder="Hãy nhập tên của bạn" name="fullname" required>
         </div>
         <div class="inputBox">
            <span>SĐT :</span>
            <input type="number" class="inputSdt" placeholder="Hãy nhập số điện thoại của bạn" name="phone_number" required>
         </div>
         <div class="inputBox">
            <span>Địa chỉ :</span>
            <input type="text" placeholder="Hãy nhập địa chỉ của bạn" name="address" required>
         </div>
         <div class="inputBox">
            <span>Chọn địa điểm muốn đến :</span>
            <select name="id_location" class="form-select" style="height:50px; border-radius:20px;">
               <?php
                  // Lấy danh sách danh mục sản phẩm từ database
                  $sql = 'select * from location';
                  $listLocation = executeResult($sql);
                  foreach($listLocation as $item) : 
               ?>
            
               <option value="<?php echo $item['id_location']; ?>"><?php echo $item['name']; ?></option>
               <?php endforeach; ?>
            </select>
         </div>
         <div class="inputBox">
            <span>Địa chỉ :</span>
            <input type="text" placeholder="Hãy nhập địa chỉ của bạn" name="address" required>
         </div>
         <div class="inputBox">
            <span>Bao nhiêu khách:</span>
            <input type="number" placeholder="Hãy nhập số lượng du khách" name="quantity" required>
         </div>
         <div class="inputBox">
            <span>Ngày đến :</span>
            <input type="date" name="arrival_date" required>
         </div>
         <div class="inputBox">
            <span>Ngày đi :</span>
            <input type="date" name="leave_date"required>
         </div>
      </div>

      <input type="submit" value="Đặt vé" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->


</body>
</html>

<?php  include 'include/footer.php';?>