<?php
$con = mysqli_connect("localhost:3308","root","");
if($con->connect_error){
    die("Failed:".$con->connect_error);
}
else{
    echo "Connected";
}
?>