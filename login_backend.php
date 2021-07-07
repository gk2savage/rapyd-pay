<?php



include "includes/db_conn.php";


$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/walletapp/includes/utilities.php";
include($path);

$emaq = $_SESSION['email_id'];

$sql = "SELECT ewallet_id FROM user_details WHERE email_id='$emaq'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
//var_dump($emaq);
// var_dump($row["ewallet_id"]);
// var_dump($sql);
try {
    
    $url = "/v1/user/".$row["ewallet_id"];
    $object = make_request('get', $url);
    $ewallet_data = json_encode($object);
   // var_dump($result);
    //var_dump($object);
    //echo $object["data"]["first_name"];

} catch(Exception $e) {
    echo "Error: $e";
}



try {
    $url = "/v1/user/".$row["ewallet_id"]."/transactions";
    $transaction = make_request('get', $url);
    // var_dump($transaction);
} catch(Exception $e) {
    echo "Error: $e";
}




?>