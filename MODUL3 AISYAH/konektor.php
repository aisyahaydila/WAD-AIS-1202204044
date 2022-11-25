<?php
$host = "localhost:3308";
$user = "root";
$password = "";
$database   = "modul 3";

$connector = mysqli_connect($host, $user, $password, $database);

if ($connector->connect_error) {
  die("Connection failed: " . $connector->connect_error);
}
echo "Connected successfully";

?>