<?php 
    include('../model.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thêm địa điểm</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label">Nhập Tên địa điểm</label>
                <input name ="name" type="text" class="form-control" required>
            </div>
            <button name ="add" type="submit" class="btn btn-success">Thêm</button>
        </form>
    </div>
</div>

<?php
    // include "db/database.php";
    if ( $_SERVER['REQUEST_METHOD']==='POST') {
        $add = insertLocation($_POST['name']);
        // echo "<script>window.location.href='modules/location_list.php'</script>";
        echo '<script>alert("Thêm địa điểm thành công!")</script>';
    }
?>
