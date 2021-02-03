<?php
    session_start();
    require 'config.php';
        if(!isset($_SESSION["a_id"])){
        header('location:index.php');
    }
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/icon" href="assets/img/favicon.ico">

    <title>PG2ME-Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME ICONS STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM STYLES-->
    <link href="assets/css/style.css" rel="stylesheet" />
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
                        <!-- <li><a href="#"><i class="fa fa-users"></i> My Profile</a> -->
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
                             <h3 style="color: #f1f1f1f1;"><?php echo $_SESSION["name"]; ?></h3>                           
                        </div>
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fa fa-home "></i>Dashboard</a>
                    </li>
                    <li>
                        <a class="active-menu" href="#"><i class="fa fa-home "></i>Resources<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="add_resources.php">Add Resources</a>
                            </li>
                             <li>
                                <a class="active-menu" href="manage_resources.php">Manage Resources</a>
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
                        <h1 class="page-head-line">Resources</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-8">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Resources List
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>No. Occupants</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    // Query
                                    $select_sql_resource = "SELECT * FROM resources";
                                    $result = $conn->query($select_sql_resource);
                                    if($result->num_rows>0){
                                        while($row = $result->fetch_assoc()){
                                            $id = $row["id"];
                                            $name = $row["R_name"];
                                            $price = $row["R_price"];
                                            $occupants = $row["R_occupant"];
                                            $image = $row["R_image"];
                                         ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><?php echo $name; ?></td>
                                            <td><?php echo $price; ?></td>
                                            <td><?php echo $occupants; ?></td>
                                            <td><img src="<?php echo $image; ?>" alt="room photos" style="height:50px;width: 50px;"></td>
                                            <form action="resource_delete.php" method="POST">
                                                 <input type="hidden" name="delete_id" value="<?php echo $id; ?>">
                                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                            </form>
                                        </tr>
                                           <?php
                                        }
                                    }
                                    ?>
                                    
                                    </tbody>
                                </table>    
                             
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
               
            </div>
                
              

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <footer >
        &copy; 2019 Enlighten Infosystems | By : <a href="http://www.enlighteninfosystems.com/" target="_blank">Admin Design</a>
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
