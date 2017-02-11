<?php
include 'dbconn-dd.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);

if(!$row=mysqli_fetch_assoc($result)){
  echo "Invalid Username or Password!<br>";
}

else{
  echo"Login Successful!<br><br>";
}
