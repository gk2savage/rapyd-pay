<?php

$sname= "localhost";

$unmae= $_ENV["uname"];

$password = $_ENV["password"];

$db_name = "rapyd";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>
