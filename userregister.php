
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
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

$username=$_POST["username"];
$contact=$_POST["contact"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];

if ($password==$cpassword)
{
$sql="INSERT INTO user_register (username,contact,gender,email,password) Values('$username','$contact','$gender','$email','$password')";
if ($conn->query($sql) === TRUE) {
 session_start();
 $mssg="true";
 $_SESSION['account']=$mssg;
 
  header("Location:login.php");
  
} else {
  $errmessage="Error in Creating Account";
  
  echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
  $errmessage
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
header("Location: register.php");
}

}
else{

  header("Location: register.php");
  $message="password do not match";
  echo "
  <div class='alert alert-danger' role='alert'>
  $message
</div>";

}

?>

</body>
</html>
