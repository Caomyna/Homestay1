<?php 
    include('db/database.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách hình ảnh Homestay</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <!-- Nav pills -->
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th width="50px">#</th>
                    <th width="100px">Ảnh</th>
                    <th>Homestay</th>
                    <th width="15px"></th>
                    <th width="15px"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_GET["id"]))
                    {
                        $id = $_GET['id'];
                        $sql = "DELETE FROM imagesmall WHERE id=$id";
                        $result = execute($sql);
                        echo '<script>alert("Đã xóa thành công!")</script>';
                        echo "<script>window.location.href='index.php?page=Imgsmall.php'</script>";
                    }

                    $sql = "SELECT imagesmall.id, imagesmall.images, homestay.id_homestay, homestay.homestay_name FROM imagesmall LEFT OUTER JOIN homestay ON imagesmall.homestay_id = homestay.id_homestay"; 
                    $Imgsmall = executeResult($sql);
                    $index = 1;
                    foreach($Imgsmall as $item) : 
                ?>
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><img src="../images/<?php echo $item['images']; ?>" style="width: 100px; height:100px;"></td>
                    <td><?php echo $item['homestay_name']; ?></td>
                    <td>
                        <a href="index.php?page=homestay_add.php&id=<?php echo $item['id_homestay'];?>" class="btn btn-warning">Sửa</a>
                    </td>
                    <td>
                        <a href="index.php?page=Imgsmall.php&id=<?php echo $item['id'];?>" class="btn btn-danger">Xóa</a>
                    </td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>