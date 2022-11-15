<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12564538";
$password = "ufnvQf3iGX";
$dbname="sql12564538";

$conn = new mysqli($servername, $username, $password,$dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$cardholdername=$_POST["cardholdername"];
$cardnumber=$_POST["cardnumber"];
$expirydate=$_POST["expirydate"];
$cvc=$_POST["cvc"];

$sql="INSERT INTO user_payment (cardholder_name,card_number,expiry_date,cvc) Values('$cardholdername','$cardnumber','$expirydate','$cvc')";

$conn->query($sql);
?>