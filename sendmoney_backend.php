<?php


include "includes/db_conn.php";
include "includes/utilities.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


$source = $_POST['source'];
$destination = $_POST['destination'];
$sendamount = $_POST['sendamount'];



$body = [
    "amount" => "$sendamount",
    "currency" => "INR",
    "source_ewallet" => "$source",
    "destination_ewallet" => "$destination",
    "metadata" => [
        "merchant_defined" => true
    ],
  ];

// var_dump(json_encode($body));

try {
    $sendmoney = make_request('post', '/v1/account/transfer', $body);
    //var_dump($sendmoney);
    var_dump(json_encode($sendmoney));

    // echo $sendmoney["data"]["id"];
    // echo $sendmoney["data"]["status"];

    $send_id = $sendmoney["data"]["id"];

    $accepted = [
        "id" => "$send_id",
        "metadata" => [
            "merchant_defined" => "accepted"
        ],
        "status" => "accept"
    ];

    try {
        $acceptsend = make_request('post', '/v1/account/transfer/response', $accepted);
        // var_dump($acceptsend);
        // var_dump(json_encode($acceptsend));
    } catch(Exception $e) {
        echo "Error: $e";
    }


    
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