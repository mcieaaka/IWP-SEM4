<?php
include("./connect.php");
$dbname="phplearn";
mysqli_select_db( $con,$dbname);
if($_SERVER['REQUEST_METHOD']=='GET'){
    $dept = $_GET['dept'];

    $query = "SELECT * FROM PERSON WHERE DEPARTMENT='$dept'";
    $ins = mysqli_query($con,$query);
    if ($ins->num_rows > 0) {
        echo "<table border='1px solid black'><tr><th>ID</th><th>Name</th><th>DOB</th><th>Department</th><th>Salary</th></tr>";
        // output data of each row
        while($row = $ins->fetch_assoc()) {
          echo "<tr><td>".$row["Id"]."</td><td>".$row["NAME"]."</td><td>".$row["DOB"]."</td><td>".$row["DEPARTMENT"]."</td><td>".$row["SALARY"]."</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }
}
?>