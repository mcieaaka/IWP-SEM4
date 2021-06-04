<?php
$con = mysqli_connect("localhost:3308","root","","phplearn");
if($con->connect_error){
    die("Failed:".$con->connect_error);
}
else{
    echo "Connected";
}
echo "<h3>Tickets on 11-NOV-2020</h3>";
$query2 = "SELECT * FROM TICKET WHERE doj='2020-11-11'";
    $in2 = mysqli_query($con,$query2);
    if ($in2->num_rows > 0) {
        while($row = $in2->fetch_assoc()) {
          echo "<br>TID= ".$row['Tid'];
        }
    } else {
        echo "0 results";
    }
?>