<?php
session_start();
$product_name =  $_POST['name'];
$book_date = $_POST['date'];
$occupants = $_POST['occupants'];
$total = $_POST['total'];
$phone = $_SESSION['phone'];
$email = $_SESSION['email'];
$cname = $_SESSION['name'];

$_SESSION['bookdate'] = $book_date;
$_SESSION['person'] = $occupants;
$_SESSION['product_name'] = $product_name;



include 'payment/instamojo.php';
//Private API Key  / Private Auth Token

$api = new Instamojo\Instamojo('test_92408ba4b8a39f57387ee61797d', 'test_6b3f5dcc59e9529032610ddd61e', 'https://test.instamojo.com/api/1.1/');


try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $product_name,
        "amount" => $total,
        "buyer_email" => $email,
        "buyer_phone" => $phone,
        "phone" => $phone,
        "buyer_name" => $cname,
        "send_email" => true,
        "send_sms" => true,
        "sms_status" => "Sent",
        "email_status" => "Sent",
        "email" => $email,
        'allow_repeated_payments' => false,

        "redirect_url" => "http://localhost:80/tenant/payment_success.php",
        "webhook" => "http://webhook.php"
    ));
    print_r($response);

    $pay_ulr = $response['longurl'];

    //Redirect($response['longurl'],302); //Go to Payment page

    header("Location: $pay_ulr");
    exit();

} catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}

?>