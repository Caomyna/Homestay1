<?php 
    include('../model.php');
    function deleteLocation(){
        $id_location=$_GET['id_location'];
        $result=deleteLocationByID($id_location);
        if ($result) {
            echo "<script>window.location.href='location_list.php'</script>";
            echo "<script>alert('Xóa thành công')</script>";
        } else {
            echo "<script>alert('Xóa không thành công')</script>";
        }
        
    }
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách địa điểm</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th width="15px">STT</th>
                    <th width="30px">ID_location</th>
                    <th>Tên địa điểm</th>
                    <th width="15px"></th>
                    <th width="15px"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Lấy danh sách danh mục sản phẩm từ database
                    $listLocation = selectLocation();
                    $index = 1;
                    foreach($listLocation as $item) :
                ?>
            
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $item['id_location']; ?></td>
                    <td><?php echo $item['name']; ?></td>
                    <td>
                        <a href="index.php?page=location_list.php&id_category=<?php echo $item['id_location'];?>" onclick="" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?page=location_list.php&id_location=<?php echo $item['id_location'];?>" onclick="deleteLocation()" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


