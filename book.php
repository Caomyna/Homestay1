<?php 
    include 'include/header.php';
   //  include('model.php');
    include 'admin/db/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <!-- <script type="text/javascript">
      $(document).ready(function($){
         $("#id_location").change(function(event){
            $id_location = $("#id_location").val();
            $.post("data.php",{"id_location" :id_location}, function(data){
               $("#id_homestay").html(data);
            })
         });
      });
   </script> -->
  
</head>
<body>

<div class="heading" style="background:url(https://dsdigkpw1b1xa.cloudfront.net/frontend/images/vietnam-trip-4.jpg) no-repeat">
   <h1>Đặt vé ngay</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Hãy nhập thông tin của bạn!</h1>

   <form action="" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>Họ và tên :</span>
            <input type="text" class="inputName" placeholder="Hãy nhập tên của bạn" name="fullname" required>
         </div>
         <div class="inputBox">
            <span>SĐT :</span>
            <input type="text" class="inputSdt" placeholder="Hãy nhập số điện thoại của bạn" name="phone_number" required>
         </div>
         <div class="inputBox">
            <span>Địa chỉ :</span>
            <input type="text" placeholder="Hãy nhập địa chỉ của bạn" name="address" required>
         </div>
         <div class="inputBox">
            <span>Chọn địa điểm muốn đến :</span>
            <select id="se_Pro" class="form-select" style="height:50px; font-size:16px; border:1px solid black; border-radius:20px;">
               <option style="font-size:16px;">Chọn Địa điểm</option>
               <?php
                  // Lấy danh sách danh mục sản phẩm từ database
                  $sql = "SELECT * FROM location";
                  $listLocation = executeResult($sql);
                  foreach($listLocation as $item) : 
               ?> 
               <option value="<?php echo $item['name']; ?>" style="font-size:16px;"><?php echo $item['name']; ?></option>
               <?php
                  endforeach;
               ?>
            </select>
         </div>
         <div class="inputBox">
            <span>Chọn Homestay muốn đến :</span>
            <select id="listHs">
               <option style="font-size:16px;">Chọn Homestay</option>
            </select>
         </div>
         <script type="text/javascript">
            var list = document.getElementById('listHs');
            // var check = document.getElementById('check');
            $(function() {
               $('#se_Pro').change(function() {
                  var sel = $('#se_Pro').val();
                  $.ajax({
                     type: "get",
                     url: "ajax_find.php",
                     data: {proName: sel},
                     success: function(data){
                        // check.innerHTML = data;
                        list.innerHTML = data;
                        alert('You choosed a place.');
                     }

                  });
               })
            })
         </script>

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
<?php
   if (isset($_POST['send'])) {
      if(!isset($_SESSION['fullname'])){
         echo "<script>window.location.href='login.php'</script>";
      }elseif(isset($_SESSION['fullname'])){
         $users_id = $_SESSION['id_users'];
         $fullname = $_POST['fullname'];
         $phone_number = $_POST['phone_number'];
         $address = $_POST['address'];
         // $location = $_POST['id_location'];
         $homestay = $_POST['id_homestay'];
         $quantity = $_POST['quantity'];
         $arrival_date = $_POST['arrival_date'];
         $leave_date = $_POST['leave_date'];
         $sql = "INSERT INTO booking (users_id, homestay_id, fullname, phone_number, address, quantity, arrival_date, leave_date) 
         VALUES ('$users_id', '$homestay','$fullname', '$phone_number', '$address', ' $quantity', '$arrival_date', '$leave_date')";
         $bookingAdd = execute($sql);
         echo '<script>alert("Đặt vé thành công !")</script>';        
         // echo "<script>window.location.href='login.php'</script>";
      }else {
         ini_set('display_errors', 1);
         ini_set('display_startup_errors', 1);
         error_reporting(E_ALL);
      }
   }
?>



