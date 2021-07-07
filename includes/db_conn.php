<?php

// $sname= $_ENV["sname"];

// $unmae= $_ENV["uname"];

// $password = $_ENV["password"];

// $db_name = $_ENV["dbname"];


$sname= "us-cdbr-east-04.cleardb.com";

$unmae= "b3535f9b8fd51c";

$password = "ef83571e";

$db_name = "heroku_1dceb4e469783fe";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>
