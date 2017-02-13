<?php
include 'dbconn-dd.php';
$username = $_POST['admin_username'];
$password = $_POST['admin_password'];

$sql = "SELECT * FROM admins WHERE admin_username='$username' AND admin_password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
  echo "Invalid Username or Password!<br>";
}

else{
  echo"LOGGED IN WITH ADMIN PRIVILEGES!<br><br>";
}
