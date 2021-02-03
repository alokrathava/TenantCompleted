<?php 
	session_start();
	require 'config.php';
	include 'header.php';

     if(!isset($_SESSION["id"])){
     header('location:index.php');
    }
	// Data Fetch
	$id = $_SESSION["id"];
	// Query
	$select_sql = "SELECT * FROM Register WHERE id='$id'";
	$result = $conn->query($select_sql);
	if ($result->num_rows>0) {
		while ($row = $result->fetch_assoc()) {
			$email=$row['Email'];
			$password=$row['Password'];
			$name=$row['Name'];
			$address=$row['Adress_line1'];
			$phone=$row['Phone'];
		}
	}
	// echo $email;
	// echo $password;
	// echo $name;
	// echo $address;

?>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>PG4ME</title>  
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
    <style type="text/css">
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>
</head>
<body class="realestate_version">

<!--     <div id="preloader">
        <span class="loader"><span class="loader-inner"></span></span>
    </div> -->	
	<div id="gallery" class="section wb">        
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3><!-- Profile --></h3>
                </div>
            </div>
            <ul class='slideshow'>
		<li>
			<span>Summer</span>
		</li>
		<li>		
			<span>Fall</span>
		</li>
		<li>		
			<span>Winter</span>
		</li>
		<li>
			<span>Spring</span>
		</li>
	</ul>
	
    <div class="parallax first-section">
        <div class="container" style="padding: 50px;">
            <div class="row">
                <div class="col-md-6 wow slideInLeft hidden-xs hidden-sm">
                    <div class="contact_form" style="padding-top: 50px;">
                        <h3><i class="fa fa-envelope-o grd1 global-radius"></i>Profile</h3>
                        <form id="contactform1" class="row" name="contactform" method="POST" action="update_profile.php">
                            <fieldset class="row-fluid">
                            	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            		<label for="Name" class="form-group">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" readonly="TRUE" value="<?php echo $name;?>">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                	<label for="Name" class="form-group">Mobile Number</label>
                                    <input type="number" name="number" id="number" class="form-control" value="<?php echo $phone;?>">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label for="Name" class="form-group">Password</label>
                                	<input type="text" name="password" id="pass" class="form-control" value="<?php echo $password;?>">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                	<label for="Name" class="form-group">Address</label>
                                	<input type="text" name="address" id="address" class="form-control" value="<?php echo $address;?>">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" value="SEND" id="submit1" class="btn btn-light btn-radius btn-brd grd1 btn-block">Update Profile</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
				<div class="col-md-6 col-sm-12">
                    <div class="big-tagline clearfix">
                        <h2>Rent Your Property with PG4ME</h2>
                        <p class="lead">With PG4ME, you can promote your all property & real estate projects. </p>
                    </div>
                </div>
                <nav id="breadcrumbs" style="margin-right: 35px;">
                        <ul>
                            <a href="history.php" class="btn btn-lg" style="background-color: #B4E000;color: #f1f1f1;">History</a>
                        </ul>
                    </nav>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->
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

<?php
	include 'footer.php';
 ?>