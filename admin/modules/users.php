<?php 
    include('../model.php');
    include('db/database.php');
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý người dùng</h1>
        </div>
            <!-- /.col-lg-12 -->
    </div>
    <div class="row">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>ID_Users</th>
                    <th>Họ tên</th>
                    <th>Email</th>
                    <th>Mật khẩu</th>
                    <th>Số điện thoại</th>
                    <th>Role</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if(isset($_GET["id_users"]))
                    {
                        $id_users = $_GET['id_users'];
                        $sql = "DELETE FROM users WHERE id_users=$id_users";
                        $conn = mysqli_connect('localhost:3306', 'root', '', 'homestay');  
                        $resultset = mysqli_query($conn, $sql);
                        mysqli_close($conn);
                        echo '<script>alert("Đã xóa thành công!")</script>';
                        echo "<script>window.location.href='index.php?page=users.php'</script>";
                    }
                    // Lấy danh sách danh mục sản phẩm từ database
                    // $sql = 'SELECT * FROM users';
                    $users = selectUser();
                    $index = 1;
                    foreach($users as $item) : 
                ?>
            
                <tr>
                    <td><?php echo $index++; ?></td>
                    <td name="id_users"><?php echo $item['id_users']; ?></td>
                    <td><?php echo $item['fullname']; ?></td>
                    <td><?php echo $item['email']; ?></td>
                    <td><?php echo $item['password']; ?></td>
                    <td><?php echo $item['phone_number']; ?></td>
                    <td>
                        <?php 
                            if ($item['role']==1) {
                                echo 'Admin';
                            }else{
                                echo 'user'; 
                            }
                        ?>
                
                    </td>
                    <td>
                        <a href="index.php?page=users.php&id_users=<?php echo $item['id_users']; ?>" onclick = "deleteUserByID($item['id_users'])" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
                        
            </tbody>
            <?php endforeach;?>
        </table>
    </div>
</div>
