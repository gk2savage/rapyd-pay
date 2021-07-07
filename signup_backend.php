<?php


include "includes/db_conn.php";
include "includes/utilities.php";

// if (isset($_POST['fname']) && isset($_POST['lname'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {



$emaq = $_POST['email'];
// $emaq = "ii@gmail.com";



$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$refid = $_POST['refid'];

// var_dump($phone);

$body = [
    "first_name" => "$fname",
    "last_name" => "$lname",
    "email" => "$emaq",
    "ewallet_reference_id" => "$refid",
    "metadata" => [
        "merchant_defined" => true
    ],
    "phone_number" => "$phone",
    "type" => "person",
    "contact" => [
        "contact_type" => "personal",
        "country" => "$country",
        "metadata" => [
                "merchant_defined" => true
        ],
      ],
    ];
var_dump(json_encode($body));


try {
    $signup = make_request('post', '/v1/user', $body);
    var_dump($signup);
    $ewall = $signup["data"]["id"];
    $sql = "UPDATE user_details  SET ewallet_id = '$ewall' WHERE email_id = '$emaq'"; 
    $result = mysqli_query($conn, $sql);
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