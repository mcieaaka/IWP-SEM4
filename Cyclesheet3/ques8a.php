<?php
include("./connect.php");
$dbname="phplearn";
mysqli_select_db( $con,$dbname);
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Id = $_POST['Id'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $dept = $_POST['dept'];
    $salary = $_POST['salary'];

    $query = "INSERT INTO PERSON VALUES('$Id','$name','$dob','$dept','$salary')";
    $ins = mysqli_query($con,$query);
    if(!$ins){
        echo mysqli_error($con);
    }else{
        echo "<br>Successfull Insertion in DB";
    }
}
?>