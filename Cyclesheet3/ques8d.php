<?php
include("./connect.php");
$dbname="phplearn";
mysqli_select_db( $con,$dbname);
$query1= "UPDATE PERSON SET SALARY = SALARY+(SALARY*10/100) WHERE DEPARTMENT = 'SALE'";
$query2= "SELECT COUNT(*) as n FROM PERSON WHERE DEPARTMENT = 'SALE'";
$ins = mysqli_query($con,$query1);
$ins2 = mysqli_query($con,$query2);
$c = $ins2 -> fetch_assoc();
echo "<h3>No. of Persons in SALE with increase in salary= ".$c['n']."</h3>";

?>