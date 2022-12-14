<?php 
    include('../model.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách Homestay</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <!-- Nav pills -->
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Homestay</th>
                    <th>Ảnh</th>
                    <th class="text-truncate">Địa chỉ</th>
                    <th>Tỉnh</th>
                    <th class="text-truncate">Mô tả</th>
                    <th>Giá</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    deleteHomeStayById($id);
                } ?>
                <?php  
                    $listH = getHomestay();
                    foreach ($listH as $h) {
                ?>
                <tr>
                    <td><?php echo $h['id_homestay']; ?></td>
                    <td><?php echo $h['homestay_name']; ?></td>
                    <td><img src="../images/<?php echo $h['images']; ?>" style="width: 100px; height:100px;"></td>
                    <td><?php echo $h['address']; ?></td>
                    <td><?php echo $h['name']; ?></td>
                    <td><?php echo $h['descript']; ?></td>
                    <td><?php echo $h['price']; ?></td>
                    <td>
                        <a href="index.php?page=homestay_add.php&id=<?php echo $h['id_homestay']; ?>" onclick="" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?page=homestay_list.php&id=<?php echo $h['id_homestay']; ?>" onclick="" class="btn btn-danger">Xóa</a>
                    </td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>








