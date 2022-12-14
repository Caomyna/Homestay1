<?php 
    include ('include/header.php');

    if (isset($_POST['register'])) {
        $fullname = $_POST['fullname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $password = md5($password);  // Mã khóa mật khẩu
        // //Kiểm tra tên đăng nhập này đã có người dùng chưa

        $result = insertUser($fullname, $password, $email, $phone);
        echo '<script>alert("Đăng ký thành công !")</script>';        
        echo "<script>window.location.href='login.php'</script>";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $sql ="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $user = executeSingle($sql);

        if ($user == 0){
            echo '<script>alert("Sai tên đăng nhập hoặc mật khẩu! !")</script>';
            echo "<script>window.location.href='login.php'</script>";
        }
        else
        {
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['password'] = $user['password'];
            $_SESSION['id_users'] = $user['id_users'];
            if ($user['role'] == 1){
                $_SESSION['role'] = 'admin';
                echo "<script>window.location.href='admin/index.php'</script>";
            }
            else{
                $_SESSION['role'] = 'user';
                echo "<script>window.location.href='index.php'</script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>    
    </head>
    <body>
        <!-- Form Login -->
        <section class="login-form">
            <div class="form-box">
                <div class="button-box">
                    <div id="buttn"></div>
                    <button type="button" class="toggle-btn" onclick="login()">Đăng nhập</button>
                    <button type="button" class="toggle-btn" onclick="register()">Đăng ký</button>
                </div>
                <div class="social-icons">
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-google"></i>
                    <i class="fab fa-twitter "></i>
                </div>
                <form id="login" class="input-group" method="post">
                    <input name="email" type="text" class="input-field" placeholder="Email" required style="margin: 20px 0 10px 0 ;">
                    <input name="password" type="password" class="input-field" placeholder="Mật khẩu" required style="margin-bottom: 100px;">
                    <button name="login" type="submit" class="submit-btn" style="border-radius:30px; ">Đăng nhập</button>
                </form>

                <form id="register" action="" method="post" class="input-group">
                    <input type="text" class="input-field" placeholder="Tên đăng nhập" name="fullname" required>
                    <input type="password" class="input-field" placeholder="Mật khẩu" name="password" required>
                    <input type="email" class="input-field" placeholder="Email" name="email"  required>
                    <input type="text" class="input-field" placeholder="Số điện thoại" name="phone" required>
                    <br><br>
                    <button name="register" type="submit" class="submit-btn" name ="register" style="border-radius:30px; margin-top:15px;">Đăng ký</button>
                </form>
            </div>
        </section>

        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("buttn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "150px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }
        </script>
    <?php 
        include ('include/footer.php');
    ?>
    </body>
</html>


