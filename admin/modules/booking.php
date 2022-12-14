<?php 
    include 'db/database.php';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý đặt phòng</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Fullname</th>
                    <th>Phone</th>
                    <th>Homestay</th>
                    <th>Quantity</th>
                    <th>Arrival_date</th>
                    <th>Leave_date</th>
                    <th width="15px"></th>
                    <th width="15px"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                     if(isset($_GET["id_book"]))
                     {
                        $id_book = $_GET['id_book'];
                        $sql = "DELETE FROM booking WHERE id_book=$id_book";
                        $conn = mysqli_connect('localhost:3306', 'root', '', 'homestay');    
                        $resultset = mysqli_query($conn, $sql);
                         echo '<script>alert("Đã xóa thành công!")</script>';
                         echo "<script>window.location.href='index.php?page=booking.php'</script>";
                     }
                    // Lấy danh sách danh mục sản phẩm từ database
                    $sql = 'SELECT booking.id_book, booking.fullname, booking.phone_number, booking.quantity, booking.arrival_date, booking.leave_date, homestay.homestay_name
                    FROM booking LEFT OUTER JOIN homestay ON booking.homestay_id = homestay.id_homestay';
                    $listBooking = executeResult($sql);
                    $index = 1;
                    foreach($listBooking as $item) :
                ?>
            
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td><?php echo $item['fullname']; ?></td>
                    <td><?php echo $item['phone_number']; ?></td>
                    <td><?php echo $item['homestay_name']; ?></td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo $item['arrival_date']; ?></td>
                    <td><?php echo $item['leave_date']; ?></td>
                    <td>
                        <a href="index.php?page=book_detail.php&id_book=<?php echo $item['id_book'];?>"class="btn btn-success">Xem</a>
                    </td>
                    <td>
                        <a href="index.php?page=booking.php&id_book=<?php echo $item['id_book'];?>"class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>


