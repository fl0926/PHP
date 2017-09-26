<?php

    for($i=0;$i <= 255; $i++){
        $color = "#".dechex($i).dechex($i).dechex($i);
        echo "<div style='background-color:$color'>$i</div>";
    }

    for($c=1;$c <= 10; $c++){
        echo"Looking at carton $c<br/>";
        for($e=1;$e <=12; $e++){
            echo"--- Egg number $e in carton $c is not broken.<br/>";
        }
    }
?>