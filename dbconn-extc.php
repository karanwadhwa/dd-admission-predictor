<?php

$conn = mysqli_connect('localhost', 'root', 'wadhwa127', 'extc');

if(!$conn){
 die('Connection Failed: ' . mysqli_connect_error());
}
#echo "Database 'colleges' Connected Successfully.<br>";
