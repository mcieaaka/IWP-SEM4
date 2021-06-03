<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Hello There, Welcome</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <p>NAME:<input type="text" id="name" name="name"></p> 
        <p>Color:
            <select name="col">
                <option value="white">--SELECT--</option>                
                <option value="blue">blue</option>
                <option value="green">green</option>
                <option value="red">red</option>
                <option value="yellow">yellow</option>
                <option value="orange">orange</option>
            </select>
        </p>
        <p>Palindrome Check:<input type="text" name="pal"></p>
        <input type="submit">
    </form>
    <?php
    error_reporting(0);
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $c = $_POST['col'];
        switch($c){
            case "white":
                echo "<style>body{background-color:white}</style>";
                break;
            case "blue":
                echo "<style>body{background-color:blue}</style>";
                break;
            case "green":
                echo "<style>body{background-color:green}</style>";
                break;
            case "red":
                echo "<style>body{background-color:red}</style>";
                break;
            case "yellow":
                echo "<style>body{background-color:yellow}</style>";
                break;
            case "orange":
                echo "<style>body{background-color:orange}</style>";
                break;
        }
        echo "<style>body{background-color:$c}</style>";
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $n = $_POST['name'];
        $form = "%H";
        $strf=strftime($form);
        if($strf>1 and $strf<12){
            $m = "Good Morning";
        }elseif($strf > 12 and $strf<17){
            $m = "Good Afternoon";
        }elseif($strf > 17 and $strf<21){
            $m = "Good Evening";
        }elseif($strf > 21){
            $m = "Good Night";
        }
        echo "<h2>".$m." ".$n."</h2>";
    }
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $n = $_POST['pal'];
        function Reverse($str){
            for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
            {
                $temp = $str[$i];
                $str[$i] = $str[$j];
                $str[$j] = $temp;
            }
            return $str;
        }
        $r = Reverse($n);
        if($r===$n){
            echo $n." is Palindrome";
        }else{
            echo $n." is not Palindrome";
        }
    }
    ?>
</body>
</html>