<?php 
    include('../model.php');
?>
<?php  
    $pro = '';
    $name = '';
    $address = '';
    $des = '';
    $price = '';
    $pic = '';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $result = getHomeStayById($id);
        $pro = $result[0]['location_id'];
        $name = $result[0]['homestay_name'];
        $address = $result[0]['address'];
        $des = $result[0]['descript'];
        $price = $result[0]['price'];
        $pic = $result[0]['images'];
    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                <?php 
                    echo isset($_GET["id"])?"Cập nhật":"Thêm"?> Homestay
            </h1>
        </div>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group provName mt-4">
            <label>Tỉnh</label><br>
            <?php  
            $listP = selectLocation();
            foreach ($listP as $p) {
            ?>
            <label class="form-check-label"><input type="radio" name="proId" value ="<?php echo($p['id_location']); ?>" <?php if($p['id_location'] == $pro) { echo "checked";?><?php } ?>><?php echo($p['name']); ?></label>
            <?php } ?>
        </div>
        <div class="form-group">
            <label for="locateName">Tên</label>
            <input type="" name="locateName" class="form-control" value="<?php echo($name) ?>">
        </div>
        <div class="form-group">
            <label for="locateAddress">Địa chỉ</label>
            <input type="" name="locateAddress" class="form-control" value="<?php echo($address) ?>">
        </div>
        <div class="form-group">
            <label for="locateDes">Miêu tả</label>
            <input type="" name="locateDes" class="form-control" value="<?php echo($des) ?>">
        </div>
        <div class="form-group">
            <label for="locatePrice">Giá</label>
            <input type="" name="locatePrice" class="form-control" value="<?php echo($price) ?>">
        </div>
        <div class="form-group">
            <label for="locateImg">Hình ảnh:</label>
            <input type="file" name="locateImg" id="locateImg" enctype="multipart/form-data" class="form-control" value="<?php echo($pic) ?>">
            <img src="../images/<?php echo($pic) ?>" alt="" style="max-width: 300px;">
        </div>
        <button type="submit" class="btn btn-success" name="submit">Lưu</button>
    </form>
</div>


<?php 
if (isset($_POST['submit'])) {
    $proId = $_POST['proId'];
    $locateName = $_POST['locateName'];
    $locateAddress = $_POST['locateAddress'];
    $locateDes = $_POST['locateDes'];
    $locatePrice = $_POST['locatePrice'];
    $locateImg = '';
    if(isset($_FILES['locateImg'])) {
        $dir = "../images/";
        $target_file = $dir.basename($_FILES["locateImg"]["name"]);
        $locateImg = basename($_FILES["locateImg"]["name"]);
        $allowUpload = true;
        $allowtypes = array('jpg', 'png', 'jpeg', 'gif', 'jfif');
        $maxfilesize   = 10000000;
        if ($_FILES["locateImg"]['error'] != 0) {
            echo "<br>The uploaded file is error or no file selected.";
            die;
        }
        if ($allowUpload) {
            //Lưu file vào thư mục được chỉ định trên server
            if (move_uploaded_file($_FILES["locateImg"]["tmp_name"], $target_file)) {
                echo "<br>File ". basename( $_FILES["locateImg"]["name"])." uploaded successfully.";
                echo "The file saved at " . $target_file;

            } else {
                echo "<br>An error occurred while uploading the file.";
            }
        }
    }
    if (isset($_GET['id'])) {
        $result = updateHomestay($id, $proId, $locateName, $locateImg, $locateAddress, $locateDes, $locatePrice);
    }
    else {
        $result = insertHomestay($proId, $locateName, $locateImg, $locateAddress, $locateDes, $locatePrice);
    }
    if ($result < 0) {
        echo "Can't make it...............";
    } else {
    // echo ('<script type="text/javascript">alert("Must fill all information")</script>')
        echo "Can't make it";
    }
}
// 
// 