<?php

$sname= $_ENV["sname"];

$unmae= $_ENV["uname"];

$password = $_ENV["password"];

$db_name = $_ENV["dbname"];

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>
