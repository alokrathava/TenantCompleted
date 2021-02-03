<?php
session_start();
require 'config.php';
include 'header.php';
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
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
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

</head>
<body class="realestate_version">

<div id="gallery" class="section wb">
    <div class="container">
        <div class="section-title row text-center">
            <div class="col-md-8 col-md-offset-2">
                <h3>Payment Successfull</h3>
                <p class="lead">Invoice has been send at the <?php echo $_SESSION['email'] ?></p>
                <hr style="margin-left:100px;margin-right: 100px;">
                <image src="images/a1.gif" width="200" height="170">
            </div><!-- end col -->
        </div><!-- end title -->
        <div style="text-align: center;">
            <?php
            include 'payment/instamojo.php';
            $api = new Instamojo\Instamojo('test_92408ba4b8a39f57387ee61797d', 'test_6b3f5dcc59e9529032610ddd61e', 'https://test.instamojo.com/api/1.1/');
            $payid = $_GET["payment_request_id"];

            try {
                $response = $api->paymentRequestStatus($payid);
                echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>";
                echo "<h4>Name: " . $response['payments'][0]['buyer_name'] . "</h4>";
                echo "<h4>Email: " . $response['payments'][0]['buyer_email'] . "</h4>";
                echo "<h4>Phone: " . $response['payments'][0]['buyer_phone'] . "</h4>";
                echo "<h4>Total Amount : " . $response['payments'][0]['amount'] . "</h4>";
                echo "<h4>Payment Way : " . $response['payments'][0]['status'] . "</h4>";

                $payment_id = $response['payments'][0]['payment_id'];
                $name = $response['payments'][0]['buyer_name'];
                $email = $response['payments'][0]['buyer_email'];
                $phone = $response['payments'][0]['buyer_phone'];
                $amount = $response['payments'][0]['amount'];
                $payment_way = $response['payments'][0]['status'];

                //echo "<pre>";
                //print_r($response);
//echo "</pre>";

            } catch (Exception $e) {
                print('Error: ' . $e->getMessage());
            }
            ?>
        </div>
        <div id="da-thumbs" class="da-thumbs portfolio">
            <?php
            // Data Fetch
            $product_name = $_SESSION['product_name'];
            $no_occupants = $_SESSION['person'];
            $book = $_SESSION['bookdate'];

            // Queries
            $Insert_Payment_Sql = "INSERT INTO payment(R_name,R_price,Email,Payment_id,Book_date,Occupants) VALUES ('$product_name','$amount','$email','$payment_id','$book','$no_occupants')";
            echo $Insert_Payment_Sql;
            $Insert_Booking_Sql = "INSERT INTO book_resource(R_name,R_occupants,Email,R_price,Payment_id,R_bookdate) VALUES ('$product_name','$no_occupants','$email','$amount','$payment_id','$book')";
            echo $Insert_Payment_Sql;

            if ($conn->query($Insert_Payment_Sql) === TRUE) {
                if ($conn->query($Insert_Booking_Sql) == TRUE) {
                    // header('Location:index.php');
                    echo "<script>window.location.href='index.php';</script>";
                    exit;
                } else {
                    echo "<script>window.location.href='index.php';</script>";
                    exit;
                }
            } else {
                echo "<script>window.location.href='index.php';</script>";
                exit;
            }

            ?>
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
