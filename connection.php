<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="cafe";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
    // echo "Connection established" ;
}
else{
    echo "Connection failed".mysqli_connect_errno();
}
?>