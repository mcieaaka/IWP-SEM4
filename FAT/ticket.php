<?php
$con = mysqli_connect("localhost:3308","root","","phplearn");
if($con->connect_error){
    die("Failed:".$con->connect_error);
}
else{
    echo "Connected";
}
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Id = $_POST['tid'];
    $sn = $_POST['sn'];
    $tt=$_POST['tt'];
    $vf=$_POST['vf'];
    $vt=$_POST['vt'];
    $doj=$_POST['doj'];
    $amt=$_POST['amt'];

    $query = "INSERT INTO ticket VALUES('$Id','$sn','$tt','$vf','$vt','$doj','$amt')";
    $ins = mysqli_query($con,$query);
    if(!$ins){
        echo mysqli_error($con);
    }else{
        echo "<br>Successfull Insertion in DB";
    }

}
?>