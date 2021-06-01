<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This Is the First Page</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="GET">
        <p>USERNAME:<input type="text" name="user"></p>
        <input type="submit">
    </form>
    <?php
    error_reporting(0);
        if($_SERVER['REQUEST_METHOD']=='GET'){
            $u = $_GET['user'];
            $cookieName = "username";
            $cookieValue = $u;
            setcookie($cookieName, $cookieValue, time() + (3600*24), "/");
            if(isset($_COOKIE[$cookieName])) {
            echo "Welcome User: <b>" . $_COOKIE[$cookieName]."</b><br>";
            }
        }
    ?>
    <a href="./ques7b.php">Go to 2nd Page</a>
</body>
</html>