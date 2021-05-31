<?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $n = (int)$_POST['n'];
            $r = (int)$_POST['r'];
            echo comb($n,$r);
        }
        function comb($a,$b){
            $af = fact($a);
            $bf = fact($b);
            $abf = fact($a-$b);
            return ($af/($abf*$bf));
        }
        function fact($num){
            $p=1;
            for($i=1; $i<=$num; $i++)
            {
                $p = $p*$i;
            }
            return $p;
        }
    ?>