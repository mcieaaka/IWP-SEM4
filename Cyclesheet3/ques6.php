<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Hello This is a browser page</h1>
        <?php
            $visitCount = 1;
            if(isset($_COOKIE['visitCount'])){
                $visitCount = $_COOKIE['visitCount'];
                $visitCount ++;
            }
            setcookie('visitCount', $visitCount, time()+3600*24);
            echo "<h3>Your Visit Count is ".$visitCount."</h3>";
        ?>
    </body>
</html>