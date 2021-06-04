<?php
$con = mysqli_connect("localhost:3308","root","","phplearn");
if($con->connect_error){
    die("Failed:".$con->connect_error);
}
else{
    echo "Connected";
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Id = $_POST['pid'];
    $fn = $_POST['fn'];
    $ln=$_POST['ln'];
    $add=$_POST['add'];
    $gender = trim($_POST['gender']);
    $phn=$_POST['phn'];

    $query = "INSERT INTO passenger VALUES('$Id','$fn','$ln','$add','$gender','$phn')";
    $ins = mysqli_query($con,$query);
    if(!$ins){
        echo mysqli_error($con);
    }else{
        echo "<br>Successfull Insertion in DB";
    }
}
?>