<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('head.php');?>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Let's Travel</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="">
                            <i class="fa fa-user fa-fw"></i> 
                            <?php 
                                if(isset( $_SESSION['fullname']))
                                {
                                    if($_SESSION['role']=='admin'){
                                        echo $_SESSION['fullname']; 
                                    }
                                }
                                else echo "<script>window.location.href='../login.php'</script>";
                            ?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="logout.php"><i class="fas fa-sign-out" style="width: 20px;"></i> Logout</a>
                            </li>
                        </ul>
                    </li> 
                </ul>
                <!-- /.navbar-top-links -->

                <?php include('sidebar.php');?>
            </nav>

            <div id="page-wrapper">
                <?php 
                    if(isset($_GET["page"])){
                        $page = $_GET["page"];
                        $file = "modules/".$page;
                        include($file);
                    }
                ?>
            </div>

        </div>
        <!-- /#wrapper -->
    <?php include('footer.php');?>
    </body>
</html>
