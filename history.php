<?php 
    session_start();
    require 'config.php';
    include'header.php';

    if(!isset($_SESSION["id"])){
     header('location:index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>CITY Real Estate - Responsive HTML5 Landing Page Template</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Colors CSS -->
    <link rel="stylesheet" href="css/colors.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="realestate_version">

    <!-- LOADER -->
    <!-- end loader -->
    <!-- END LOADER -->
	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Booking History</h2>
					<!-- Breadcrumbs -->
				</div>
			</div>
		</div>
	</div>
	
	<div id="gallery" class="section wb">        
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <!-- Data Table -->
                  <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Type Of Room</th>
                      <th scope="col">Booking Date</th>
                      <th scope="col">Amount</th>
                      <th scope="col">No. of Occuopant</th>
                    </tr>
                  </thead><?php 
                    // Data Fetch
                    $email = $_SESSION["email"];    
                    // Query
                    $select_data_sql = "SELECT * FROM book_resource WHERE Email='$email'";
                    // echo $select_data_sql;
                    $cnt = 1;
                    $result = $conn->query($select_data_sql);
                    if($result->num_rows>0){
                        while ($row = $result->fetch_assoc()) { ?>
                        
                            <tbody>
                             <tr>
                              <th scope="row"><?php echo $cnt;?></th>
                              <td><?php echo $row['R_name']; ?></td>
                              <td><?php echo $row['R_bookdate']; ?></td>
                              <td><?php echo $row['R_price']; ?></td>
                              <td><?php echo $row['R_occupants']?></td>
                             </tr>
                            </tbody>
                    <?php   
                        $cnt++;
                      }
                    }

                  ?>
            </table>
                </div><!-- end col -->
            </div><!-- end title -->                
            </div><!-- end portfolio -->
        </div><!-- end container -->
    </div><!-- end section -->

    
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>
   <!-- MAP & CONTACT -->
    <script src="js/map.js"></script>

</body>
</html>