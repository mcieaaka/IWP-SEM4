<?php
$con = mysqli_connect("localhost:3308","root","","phplearn");
if($con->connect_error){
    die("Failed:".$con->connect_error);
}
else{
    echo "Connected";
}
echo "<h3>Passengers with No Phone</h3>";
$query2 = "SELECT * FROM PASSENGER WHERE phone='0'";
    $in2 = mysqli_query($con,$query2);
    if ($in2->num_rows > 0) {
        while($row = $in2->fetch_assoc()) {
          echo "<br>Passenger= ".$row['Firstname']." Id=".$row['Pid'];
        }
    } else {
        echo "0 results";
}
?>