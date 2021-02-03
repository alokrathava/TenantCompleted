<?php 
    require 'config.php';
    session_start();
    // Queries
    $Select_sql_deluxe ="SELECT * FROM resources WHERE R_name='Deluxe'";
    $Select_sql_superb = "SELECT * FROM resources WHERE R_name='Superb'";
    $Select_sql_luxurious = "SELECT * FROM resources WHERE R_name='Luxurious'";
    

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
            <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style type="text/css">
.myButton {
    box-shadow: 0px 1px 0px 0px #3e7327;
    background:linear-gradient(to bottom, #77b55a 5%, #72b352 100%);
    background-color:#77b55a;
    border-radius:6px;
    border:1px solid #4b8f29;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:10px 100px;
    text-decoration:none;
    text-shadow:0px -1px 0px #5b8a3c;
    float: left;
}
.myButton:hover {
    background:linear-gradient(to bottom, #72b352 5%, #77b55a 100%);
    background-color:#72b352;
}
.myButton:active {
    position:relative;
    top:1px;
}

        
.book {
    box-shadow: 0px 1px 0px 0px #f0f7fa;
    background:linear-gradient(to bottom, #33bdef 5%, #019ad2 100%);
    background-color:#33bdef;
    border-radius:6px;
    border:1px solid #057fd0;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:15px;
    font-weight:bold;
    padding:10px 70px;
    text-decoration:none;
    text-shadow:0px -1px 0px #5b6178;
    float: left;
}
.book:hover {
    background:linear-gradient(to bottom, #019ad2 5%, #33bdef 100%);
    background-color:#019ad2;
}
.book:active {
    position:relative;
    top:1px;
}


</style>
</head>
<body class="realestate_version">
<?php  
    include 'header.php';
?>	
	<div class="all-title-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
	
	<div class="about-box">
		<div class="container">
			<div class="section-title row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <h3>OUR SERVICES</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non mi vitae risus blandit rutrum ac id arcu. Vivamus sodales metus id posuere pulvinar. In id arcu et purus vehicula euismod. Fusce eu nibh sit amet neque suscipit malesuada. </p>
                </div><!-- end col -->
            </div><!-- end title -->
			
			<div class="row">
				<div class="col-md-4 col-sm-4 col-sm-12">
					<div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-01.png" class="img-responsive" alt="">
						</div>
						<div class="single-services-desc">
							<h4><a href="#">Deluxe</a></h4>
							<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						</div>
						<!-- <a href="#" class="btn btn-light btn-radius grd1 btn-brd"> Read More </a> -->
                          <button type="button" class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#myModal">Deluxe</button>
                          <!-- The Modal -->
                            <div class="modal" id="myModal">
                            <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                            <!-- Modal Header -->
                               <div class="modal-header">
                                  <h1 class="modal-title">Deluxe Rooms</h1>
                                  <button type="button" class="close" data-dismiss="modal">×</button>
                               </div>
                            <!-- Modal body -->
                               <div class="modal-body">
                                    <?php 
                                        $deluxe = $conn->query($Select_sql_deluxe);
                                        if ($deluxe->num_rows>0) {
                                            while ($row = $deluxe->fetch_assoc()) {
                                                // $r_id = $row['id'];
                                                $r_img = $row['R_image'];
                                                $r_occupant = $row['R_occupant'];
                                                $r_price = $row['R_price'];
                                                $r_name = $row['R_name'];

                                                $total=$r_price+$r_price;
                                            }
                                        }
                                     ?>
                                    <!-- <p><img src="<?php echo "admin/".$r_image.""; ?>" alt="deluxe" style="height: 150px; width: 200px;"><p> -->
                                    <h4><strong>Features</strong></h4>    
                                    <p><ul><li>1. Preferred national newspaper.</li></ul></p>    
                                    <p><ul><li>2. High Speed Internet Access / WiFi services is on a chargeable basis.</li></ul></p>
                                    <p><strong>Number Of Occupant:- </strong><?php echo $r_occupant; ?></p>    
                                    <p><strong>Price:- ₹</strong><?php echo $r_price; ?></p>
                                    <p><strong style="color: red;">*</strong>One Month Rent as Adavance.</p>
                                    <form action="bookout.php" method="POST">
                               </div>
                               <input type="hidden" name="id" value="<?php echo $r_id; ?>">
                               <input type="hidden" name="name" value="<?php echo $r_name; ?>">
                               <!-- <input type="hidden" name="occupant" value="<?php echo $r_occupant ?>"> -->
                               <input type="hidden" name="price" value="<?php echo $total ?>">
                               <div class="form-group" style="margin-left: 15px;margin-right: 30px;">
                                <label for="Occupant">Occupant</label>
                                <select name="person" class="form-control">
                                    <option value="">Select No. People</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <br>
                                <label for="Book Date">Book Date</label>
                                <input type="date" name="bookdate" class="form-control" required="TRUE">
                            </div>
                            <!-- Modal footer -->
                               <div class="modal-footer">
                                <?php  if(isset($_SESSION["id"])){?>
                               <button type="submit" class="book">Book Now</button><span style="padding: 10px;padding-top: 20px;font-size: 25px;"><strong>Total:</strong><?php echo $r_price; echo " + "; echo $r_price; echo " = ₹"; echo $total; ?></span>
                           <?php }else{ ?>
                              <a href="login.php" class="myButton">Login</a>
                           <?php } ?>
                           </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-sm-12">
                    <div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-02.png" class="img-responsive" alt="">
						</div>
						<div class="single-services-desc">
							<h4><a href="#">Superb</a></h4>
							<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						</div>
                         <button type="button" class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#myModal1">Superb</button>
                            <!-- The Modal -->
                                <div class="modal" id="myModal1">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                                  
                            <!-- Modal Header -->
                                <div class="modal-header">
                                    <h1 class="modal-title">Superb Rooms</h1>
                                    <button type="button" class="close" data-dismiss="modal">×</button>
                                </div>
                                                    
                            <!-- Modal body -->
                                <div class="modal-body">
                                    <?php 
                                        $superb = $conn->query($Select_sql_superb);
                                        if ($superb->num_rows>0) {
                                            while ($row = $superb->fetch_assoc()) {
                                                $r_id = $row['id'];
                                                $r_name = $row['R_name'];
                                                $r_img = $row['R_image'];
                                                $r_occupant = $row['R_occupant'];
                                                $r_price = $row['R_price'];
                                                $total=$r_price+$r_price;

                                            }
                                        }
                                     ?>
                                    <!-- <p><img src="<?php echo "admin/".$r_image.""; ?>" alt="superb" style="height: 150px; width: 200px;"><p> -->
                                    <h4><strong>Features</strong></h4>    
                                    <p><ul><li>1. Preferred national newspaper.</li></ul></p>
                                    <p><ul><li>2. Club Hours from 1800 to 2000 hours.</li></ul></p>
                                    <p><ul><li>3. Late Check-out till 4 pm (subject to availability).</li></ul></p>
                                    <p><ul><li>4. High Speed Internet Access / WiFi services is on a chargeable basis.</li></ul></p>
                                    <p><strong>Number Of Occupant:- </strong><?php echo $r_occupant; ?></p>    
                                    <p><strong>Price:- ₹</strong><?php echo $r_price; ?></p>
                                    <p><strong style="color: red;">*</strong>One Month Rent as Adavance.</p>
                                    <form action="bookout.php" method="POST">
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $r_id; ?>">
                                    <input type="hidden" name="name" value="<?php echo $r_name; ?>">
                                    <!-- <input type="hidden" name="occupant" value="<?php echo $r_occupant ?>"> -->
                                    <input type="hidden" name="price" value="<?php echo $total ?>">
                                    <div class="form-group" style="margin-left: 15px;margin-right: 30px;">
                                    <label for="Occupant">Occupant</label>
                                    <select name="person" class="form-control">
                                        <option value="">Select No. People</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <label for="Book Date">Book Date</label>
                                    <input type="date" name="bookdate" class="form-control" required="TRUE">
                                    </div>
                            <!-- Modal footer -->
                                 <div class="modal-footer">
                                <?php  if(isset($_SESSION["id"])){?>
                               <button type="submit" class="book">Book Now</button><span style="padding: 10px;padding-top: 20px;font-size: 25px;"><strong>Total:</strong><?php echo $r_price; echo " + "; echo $r_price; echo " = ₹"; echo $total; ?></span>
                           <?php }else{ ?>
                              <a href="login.php" class="myButton">Login</a>
                           <?php } ?>
                            </div>
                                </div>
                                </div>
                                </div>
                              </form>
                            <!-- Modal Ends -->
                        </div>
                </div>
				<div class="col-md-4 col-sm-4 col-sm-12">
					<div class="single-services">
						<div class="single-services-img">
							<img src="uploads/icon-03.png" class="img-responsive" alt="">
						</div>
						<div class="single-services-desc">
							<h4><a href="#">Luxurious</a></h4>
							<p>Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus. Sed a tellus quis mi rhoncus dignissim.</p>
						</div>
						 <button type="button" class="btn btn-light btn-radius grd1 btn-brd" data-toggle="modal" data-target="#myModal2">Luxurious</button>
                                 <!-- The Modal -->
                                    <div class="modal" id="myModal2">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                                  
                                 <!-- Modal Header -->
                                    <div class="modal-header">
                                         <h1 class="modal-title">Luxurious</h1>
                                         <button type="button" class="close" data-dismiss="modal">×</button>
                                    </div>                 
                                 <!-- Modal body -->
                                    <div class="modal-body">
                                        <?php 
                                        $luxurious = $conn->query($Select_sql_luxurious);
                                        if ($luxurious->num_rows>0) {
                                            while ($row = $luxurious->fetch_assoc()) {
                                                $r_img = $row['R_image'];
                                                $r_occupant = $row['R_occupant'];
                                                $r_price = $row['R_price'];
                                                $r_id = $row['id'];
                                                $r_name  = $row['R_name'];
                                                $total=$r_price+$r_price;
                                            }
                                        }
                                     ?>
                                    <!-- <p><img src="<?php echo "admin/".$r_image.""; ?>" alt="luxurious" class="img-responsive"><p> -->
                                    <h4><strong>Features</strong></h4> 
                                    <ul>  
                                    <p><li>1. Buffet breakfast at the Coffee Shop.</li></ul></p>
                                    <p><li>2. Club Hours from 1800 to 2000 hours.</li></ul></p>
                                    <p><li>3. Preferred national newspaper.</li></p>
                                    <p><li>4. High Speed Internet Access / WiFi services is on a chargeable basis.</li></p>
                                    <p><strong>Number Of Occupant:- </strong><?php echo $r_occupant; ?></p>
                                    <p><strong>Price:- ₹</strong><?php echo $r_price; ?></p>
                                    <p><strong style="color: red;">*</strong>One Month Rent as Adavance.</p>
                                    </ul>
                                    <form action="bookout.php" method="POST">
                                    </div>
                                    <input type="hidden" name="id" value="<?php echo $r_id; ?>">
                                    <input type="hidden" name="name" value="<?php echo $r_name; ?>">
                                    <!-- <input type="hidden" name="occupant" value="<?php echo $r_occupant ?>"> -->
                                    <input type="hidden" name="price" value="<?php echo $total ?>">
                                    <div class="form-group" style="margin-left: 15px;margin-right: 30px;">
                                    <label for="Occupant">Occupant</label>
                                    <select name="person" class="form-control">
                                        <option value="">Select No. People</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    <label for="Book Date">Book Date</label>
                                    <input type="date" name="bookdate" class="form-control datepicker" required="TRUE">
                                  </div>
                                 <!-- Modal footer -->
                                      <div class="modal-footer">
                                <?php  if(isset($_SESSION["id"])){?>
                               <button type="submit" class="book">Book Now</button><span style="padding: 10px;padding-top: 20px;font-size: 25px;"><strong>Total:</strong><?php echo $r_price; echo " + "; echo $r_price; echo " = ₹"; echo $total; ?></span>
                           <?php }else{ ?>
                              <a href="login.php" class="myButton">Login</a>
                           <?php } ?>
                            </div>
                                    </div>
                                   </div>
                               </div>
                             </form>
                           <!-- Modal Ends -->
                     </div>
				</div>
			</div>
			
		</div>
	</div>

    <script type="text/javascript">
        $('.datepicker').datepicker({ 

         startDate: new Date()

        });
    </script>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/hoverdir.js"></script>    
    <?php 
        include'footer.php';
    ?>
</body>
</html>