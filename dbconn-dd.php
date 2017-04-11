<?php

$conn = mysqli_connect('localhost', 'root', 'wadhwa127', 'dd');

if(!$conn){
 die('Connection Failed: ' . mysqli_connect_error());
}
#echo "Database 'dd' Connected Successfully.<br>";

