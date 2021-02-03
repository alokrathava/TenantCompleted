<?php
    session_start();
    require 'config.php';
    // Queries
    $select_users_sql = "SELECT * FROM Register";
    $select_booked_resources_sql = "SELECT * FROM book_resource";
    $select_resource_sql = "SELECT * FROM resources";
    if(!isset($_SESSION["a_email"])){
        header('location:index.php');
    }

 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PG4ME Admin</title>
    <link rel="icon" type="image/icon" href="assets/img/favicon.ico">
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
      <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="dashboard.php">Administrator</a>
            </div>

            <div class="notifications-wrapper">
            <ul class="nav">       
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-users"></i></a>
                    <ul class="dropdown-menu dropdown-user">
                       <!--  <li><a href="#"><i class="fa fa-user-plus"></i> My Profile</a> -->
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
               
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <h3 style="color: #f1f1f1f1;"><?php echo $_SESSION["a_name"]; ?></h3>
                        </div>
                    </li>
                    <li>
                        <a class="active-menu"  href="dashboard.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-home "></i>Resources<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_resources.php"></i>Add Resources</a>
                            </li>
                             <li>
                                <a href="manage_resources.php"></i>Manage Resources</a>
                            </li>                         
                        </ul>
                    </li> 
                    <li>
                        <a href="users.php"><i class="fa fa-users"></i>Users</a>
                        <a href="booking.php"><i class="fa fa-ticket"></i>Booking Details</a>
                    </li>                
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">DASHBOARD</h1>
                    </div>
                </div>
                <div class="row">
            <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-one">
                    <?php 
                        $result_user = mysqli_query($conn,$select_users_sql);
                        if($result_user){
                            $row = mysqli_num_rows($result_user);
                            if($row){
                                $users = $row;
                            }
                        }
                    ?>
                            <a href="#">
                                <span><i class="fa fa-users" aria-hidden="true"></i></span>
                                 <h5>Total Number of Users</h5><h3><?php echo $users; ?></h3>
                            </a>
                        </div>
                        </div>
              <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-two">
                    <?php 
                        $result_booked = mysqli_query($conn,$select_booked_resources_sql);
                        if($result_booked){
                            $row = mysqli_num_rows($result_booked);
                            if($row){
                                $booked = $row;
                            }
                        }
                    ?> <a href="#">
                                <span><i class="fa fa-shopping-cart" aria-hidden="true"></i></span>
                                 <h5>Booked Resources</h5><h3><?php echo $booked; ?></h3>
                       </a>
                        </div>
                        </div>
             <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-three">
                      <?php 
                        $result_resources = mysqli_query($conn,$select_resource_sql);
                        if($result_resources){
                            $row = mysqli_num_rows($result_resources);
                            if($row){
                                $resources = $row;
                            }
                        }
                    ?>
                            <a href="#">
                                <span><i class="fa fa-rss" aria-hidden="true"></i></span>
                                 <h5>Avaliable Resources</h5><h3><?php echo $resources; ?></h3>
                            </a>
                        </div>
                        </div>
<!--               <div class=" col-md-3 col-sm-3">
                <div class="style-box-one Style-one-clr-four">
                            <a href="#">
                                <span><i class="fa fa-money" aria-hidden="true"></i></span>
                                <h5>Total Income</h5>
                            </a>
                        </div>
                </div>  -->     

               <div class="row">
           
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
        </div>
    <!-- /. WRAPPER  -->
    <footer >
        <!-- &copy; 2019 Enlighten Infosystems | By : <a href="http://www.enlighteninfosystems.com/" target="_blank">Admin Design</a> -->
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
