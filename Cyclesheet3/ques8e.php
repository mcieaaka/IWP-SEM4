<?php
include("./connect.php");
$dbname="phplearn";
mysqli_select_db( $con,$dbname);
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $Id = $_POST['Id'];

    $query = "DELETE FROM PERSON WHERE Id = '$Id'";
    $ins = mysqli_query($con,$query);
    if(!$ins){
        echo mysqli_error($con);
    }else{
        echo "<br>Successfull Deletion";
    }
}
?>