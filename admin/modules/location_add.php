<?php 
    include('../model.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php 
                    echo isset($_GET["id_location"])?"Cập nhật":"Thêm"?> địa điểm
            </h1>
        </div>
    </div>
    <?php 
        if(isset($_GET['id_location'])){
            $id_location = $_GET['id_location'];
            $conn = mysqli_connect('localhost:3306', 'root', '', 'homestay'); 
            $sql = "SELECT * FROM location WHERE id_location = '$id_location';";
            $resultset = mysqli_query($conn, $sql); 
            $edit = mysqli_fetch_array($resultset, 1);
            $name = $edit['name'];
            $id = $edit['id_location'];
        }
         if ( isset($_POST["add"])) {
            $name= $_POST['name'];
    
            if(empty($_POST['id_location'])){
                $add = insertLocation($_POST['name']);
                echo '<script>alert("Thêm danh mục thành công!")</script>';
            }else{
                $sql = "UPDATE location SET name ='$name' WHERE id_location=$id_location;";
                $conn = mysqli_connect('localhost:3306', 'root', '', 'homestay');  
                $resultset = mysqli_query($conn, $sql);
                mysqli_close($conn);
                echo '<script>alert("Cập nhập thành công!")</script>';
            }
            echo "<script>window.location.href='index.php?page=location_list.php'</script>";
        }

    ?>
    <div class="row">
        <form action="" method="post">
            <div class="mb-3">
                <input name ="id_location" type="hidden" class="form-control" value="<?php echo !empty($id)?"$id":""?>">
                <label class="form-label">Nhập Tên địa điểm</label>
                <input name ="name" type="text" class="form-control" value="<?php echo !empty($name)?$name:"";?>" required>
            </div>
            <button style="margin:15px 15px 0 0;"name ="add" type="submit" class="btn btn-success"><?php echo empty($_GET['id_location'])?"Thêm":"Cập nhật"?></button>
        </form>
    </div>
</div>


