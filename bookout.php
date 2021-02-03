<?php 
	session_start();
	require 'config.php';
  include 'header.php';
	// Data Fetch
	  $resource_id = $_POST['id'];
	  $occupants = $_POST['person'];
	  $total = $_POST['price'];
	  $email = $_SESSION["email"];
	  $bookdate = $_POST['bookdate'];
	  $name = $_POST['name'];

//Query 
    $Select_bookdetails_sql = "SELECT * FROM book_resource WHERE R_bookdate='$bookdate' AND R_name='$name'";

	 
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
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
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

 <div class="contact_form" style="margin-top:50px;margin-left: 20px;margin-right: 20px;">
        <h3 style="font-size: 25px;"><i class="fa fa-envelope-o grd1 global-radius"></i>Preview Booking</h3>
             <fieldset class="row-fluid">
               <table border="1" style="padding: 50px;" class="table">
                <thead class="thead-dark">
                  <th scope="col">Type Of Room</th>
                  <th scope="col">email</th>
                  <th scope="col">Book Date</th>
                  <th scope="col">No. Of Occupants</th>
                  <th>Price</th>
                </thead>
                <tbody>
                  <tr>
                  <td scope="row"><?php echo $name; ?></td>
                  <td><?php echo $email ?></td>
                  <td><?php echo $bookdate; ?></td>
                  <td><?php echo $occupants;?></td>
                  <td><?php echo $total; ?></td>
                  <?php 
                    $result = $conn->query($Select_bookdetails_sql);
                    if ($result->num_rows>0) {
                      while ($row = $result->fetch_assoc()) {
                     $v_name = $row['R_bookdate'];
                      $v_date = $row['R_name'];   
                     }
                    }
                  ?>
                  </tr> 
                </tbody>
                </table>
             </fieldset>
           <form  class="row" method="POST" action="pay.php" >
               <input type="hidden" name="name" value="<?php echo $name;?>">
               <input type="hidden" name="date" value="<?php echo $bookdate;?>">
               <input type="hidden" name="occupants" value="<?php echo $occupants;?>">
               <input type="hidden" name="total" value="<?php echo $total ?>">
               <br>
<!--               <?php 
                  // $v_name="";
                  // $v_date="";
                    $result = $conn->query($Select_bookdetails_sql);
                    if ($result->num_rows>0) 
                    {
                      while ($row = $result->fetch_assoc()) 
                      {

                         $v_name = $row['R_bookdate'];
                         $v_date = $row['R_name']; 
                                                  
                     }
                  } 
                        if ($v_name==$name&&$v_date==$bookdate)
                         {?>
                           <button type="submit" class="btn-primary btn-block btn-lg" style="width: 40%" disabled="TRUE">Check Another Date</button>
                         <?php } else {?>
                           <button type="submit" class="btn-primary btn-block btn-lg" style="width: 40%">Book Now</button>
                        <?php }

                  ?> -->
                                             <button type="submit" class="btn-primary btn-block btn-lg" style="width: 40%">Book Now</button>


         
      </form>
 </div>

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