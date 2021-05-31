<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $gender = trim($_POST['gender']);
    $edu = ($_POST['edu']);
    $n = count($edu);
    echo $name;
    echo "<br>";
    echo $password;
    echo "<br>";
    echo $dob;
    echo "<br>";
    echo $gender;
    echo "<br>";
    for($i=0; $i < $n; $i++)
    {
      echo($edu[$i].",");
    }
    echo "<br>";
    echo $email;
}
?>