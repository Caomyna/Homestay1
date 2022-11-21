<?php 
    include('../model.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách homestay</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <!-- Nav pills -->
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th width="15px">ID</th>
                    <th width="30px">ProvinceID</th>
                    <th>Name</th>
                    <th width="15px">ImageLink</th>
                    <th width="15px" class="text-truncate">Address</th>
                    <th width="15px" class="text-truncate">Description</th>
                    <th width="15px">Price</th>
                    <th>#</th>
                    <th>#</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $listH = getHomestay();
                    foreach ($listH as $h) {
                ?>
                <tr>
                    <td><?php echo $h['id_homestay']; ?></td>
                    <td><?php echo $h['location_id']; ?></td>
                    <td><?php echo $h['homestay_name']; ?></td>
                    <td><?php echo $h['images']; ?></td>
                    <td><?php echo $h['address']; ?></td>
                    <td><?php echo $h['descript']; ?></td>
                    <td><?php echo $h['price']; ?></td>
                    <td>
                        <a href="index.php?page=location_list.php&id_homestay=<?php echo $h['id_homestay'];?>" onclick="" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?page=homestay_list.php&id_del=<?php echo $h['id_homestay'];?>" onclick="" class="btn btn-danger">Xóa</a>
                        <?php 
                        if (isset($_GET['id_del'])) {
                            $e = $_GET['id_del'];
                            deleteLocateByProId($e);
                        } 
                        ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>







