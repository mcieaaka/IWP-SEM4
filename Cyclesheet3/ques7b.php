<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is second page </h1>
    <?php
        $cookieName = "username";
        if(isset($_COOKIE['username'])) {
        echo "Welcome User: <b>" . $_COOKIE[$cookieName]."</b> to 2nd Page<br>";
        }
    ?>
    <a href="./ques7.php">Go to 1st Page</a>
</body>
</html>