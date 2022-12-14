<?php 
    include 'db/database.php';
    if (isset($_GET['id_book'])) {
        $id_book = $_GET['id_book'];
        $sql = "SELECT * FROM booking WHERE id_book = $id_book" ;
        $book = executeResult($sql);

        $query = "SELECT book_detail.status, book_detail.total_money, book_detail.book_id, homestay.homestay_name, homestay.images, homestay.price
        FROM book_detail INNER JOIN homestay ON book_detail.homestay_id = homestay.id_homestay WHERE book_detail.book_id=$id_book";
        $bookDetail = executeResult($query);
    }

    if(isset($_POST['status'])){
        $status = $_POST['status'];
        $sql = "UPDATE book_detail SET status = $status WHERE book_id = $id_book";
        execute($sql);
        echo "<script>window.location.href='index.php?page=book_detail.php&id_book=$id_book'</script>";
    }
?>
<head>
    <link rel="stylesheet" href="css/main.css">
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chi tiết đơn đặt phòng</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <div class="card-header" style="background-color: rgb(196, 222, 245); color: rgb(34, 130, 171);">
            <h3 class="card-title">Thông tin khách hàng</h3>
        </div>
        <div class="panel panel-infor">
            <?php 
                    foreach($book as $item) : 
            ?>
            <div class="panel-body text-left">
                <table style="border-spacing: 15px;">
                    <tr>
                        <td><b>Tên khách hàng: </b></td>
                        <td><?php echo $item['fullname'];?></td>
                    </tr>
                    <tr>
                        <td><b>Số điện thoại: </b></td>
                        <td><?php echo $item['phone_number'];?></td>
                    </tr>
                        <td><b>Số lượng khách: </b></td>
                        <td><?php echo $item['quantity'];?></td>
                    </tr>
                    <tr>
                        <td><b>Ngày Checkin: </b></td>
                        <td><?php echo $item['arrival_date'];?></td>
                    </tr>
                    <tr>
                        <td><b>Ngày Checkout: </b></td>
                        <td><?php echo $item['leave_date'];?></td>
                    </tr>
                    <tr>
                        <td><b>Phương thức thanh toán: </b></td>
                        <td><?php echo $item['payment'];?></td>
                    </tr>
                </table>               
            </div>
            <!-- -->
        </div>
    </div>
    <div class="row">
        <div class="card-header" style="background-color: rgb(196, 222, 245); color: rgb(34, 130, 171);">
            <h3 class="card-title">Thông tin Homestay</h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tên Homestay</th>
                        <th>Trạng thái phòng</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $index = 1;
                        foreach($bookDetail as $key) : 
                    ?>
                
                    <tr>
                        <td><?php echo $index++; ?></td>
                        <td><img style="width:100px; height:100px;" src="../images/<?php echo $key['images'];?>"/></td>
                        <td><?php echo $key['homestay_name']; ?></td>
                        <td>
                            <?php if($key['status'] == 0) {?>
                                <a class="btn btn-danger"> <?php echo 'Chờ xác nhận';?> </a>
                            <?php }elseif ($key['status'] == 1) {?>
                                <a class="btn btn-success"> <?php echo 'Đã xác nhận';?> </a>
                            <?php }elseif ($key['status'] == 2) {?>
                                <a class="btn btn-warning"> <?php echo 'Chờ Check-in';?> </a>
                            <?php }elseif ($key['status'] == 3) { ?>
                                <a class="btn btn-success"> <?php echo 'Đã Check-in';?> </a>
                            <?php }elseif ($key['status'] == 4) {?>
                                <a class="btn btn-warning"> <?php echo 'Đã Check-out';?> </a>
                            <?php } ?> 
                        </td>
                        <td><?php echo number_format($key['price'], 0, ",", ".");?></td>
                    </tr>  
                    <?php endforeach; ?> 
                </tbody>
            </table>
            <?php endforeach ;?>
        </div>
        <div class="row">
            <div class="card-body"> 
                <form action="" method="post" class="form-inline">
                    <div class="input-group-prepend" style="padding-left: 25px; margin-bottom: 50px;">
                        <label class="input-group-text">Cập nhật trạng thái phòng</label>
                        <select name="status" class="custom-select">
                            <option value="">---Cập nhật---</option>
                            <option value="0">Chờ xác nhận</option>
                            <option value="1">Đã xác nhận</option>
                            <option value="2">Chờ Check-in</option>
                            <option value="3">Đã Check-in</option>
                            <option value="4">Đã Check-out</option>
                        </select>
                        <button type="submit" class="btn btn-primary" style="margin-left: 20px;">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


