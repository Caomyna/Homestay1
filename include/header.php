<?php 
    session_start();
    include('model.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="js/script.js">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
   
<!-- header section starts  --> 
    <section class="header">

        <nav class="navbar-expand-lg navbar">
            <div class="container-fluid">
                <a href="index.php" class="logo">Let's Travel</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link submenu" href="package.php">Các địa điểm</a>
                            <ul class="dropdown-content">
                                <?php 
                                    $listLocation = selectLocation();
                                    $index = 1;
                                    foreach($listLocation as $item) :
                                ?>
                                <li><a class="dropdown-item" href="package.php#<?php echo $item['id_location'];?>"><?php echo $item['name'];?></a></li>

                                <?php endforeach;?>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="book.php">Đặt vé</a>
                        </li>
                
                        <?php
                            if (isset($_SESSION ['fullname'])&&$_SESSION['role'] == 'user')
                            {
                                
                                    echo '
                                    <li class="nav-item">
                                        <a href="" class="fas fa-user iconuser"></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a href="" class="nav-link" style="font-size:16px; margin-left: 5px; padding-top:10px;">'.$_SESSION['fullname'].'</a>
                                        <ul class="dropdown-content" style="padding: 5px;">
                                            <li><a class="dropdown-item" href="logout.php" style="font-size:15px;">
                                                <i class="fa fa-sign-out fa-fw"></i>  Logout</a>
                                            </li>
                                        </ul>
                                    </li>
                                '; 
                           
                            }
                            else
                            { 
                                echo '<li class="nav-item">
                                        <a href="login.php" class="fas fa-user iconuser"></a>
                                    </li>';
                            }
                        ?>
                        <!-- </li> -->

                    </ul>
                </div>
            </div>
        </nav>
        <div id="menu-btn" class="fas fa-bars" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></div>
    </section>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>