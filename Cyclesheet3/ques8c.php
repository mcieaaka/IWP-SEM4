<?php
include("./connect.php");
echo "<h1>Department Wise Count</h1>";
$dbname="phplearn";
mysqli_select_db( $con,$dbname);
$query = "SELECT DEPARTMENT, COUNT( * ) as 'Number of Entries' FROM person GROUP BY DEPARTMENT";
$ins = mysqli_query($con,$query);
if ($ins->num_rows > 0) {
    echo "<table border='1px solid black'><tr><th>Department</th><th>Number of Entries</th></tr>";
    // output data of each row
    while($row = $ins->fetch_assoc()) {
      echo "<tr><td>".$row['DEPARTMENT']."</td><td>".$row['Number of Entries']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

?>