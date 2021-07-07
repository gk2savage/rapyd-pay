<?php


include "includes/db_conn.php";
include "includes/utilities.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


$ewallet = $_POST['ewallet'];


$amt = $_POST['amt'];
$cname = $_POST['cname'];
$ccnum = $_POST['ccnum'];
$expmonth = $_POST['expmonth'];
$expyear = $_POST['expyear'];
$cvv = $_POST['cvv'];

// var_dump($phone);

$body = [
    "amount" => $amt,
    "currency" => "INR",
    "merchant_reference_id" => "first",
    "payment_method" => [
        "type" => "in_visa_credit_card",
        "fields" => [
            "number" => "$ccnum",
            "expiration_month" => "$expmonth",
            "expiration_year" => "$expyear",
            "cvv" => "$cvv",
            "name" => "$cname"
        ]
    ],
    "ewallets" => [
        [
            "ewallet" => "$ewallet",
            "percentage" => 100
        ]
    ],
    "metadata" => [
        "merchant_defined" => "created"
    ],
    "capture" => true
];


//var_dump(json_encode($body));


try {
    $payment = make_request('post', '/v1/payments', $body);
   // var_dump($payment);

    header("Location: wallet.php");
    exit();

} catch(Exception $e) {
    echo "Error: $e";
}





} 
else {
    header("Location: wallet.php");
    exit();
}
?>