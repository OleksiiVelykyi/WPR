<?php
   $a = 4;
    echo Table($a);

    function Table($a){
        for ($x=1; $x <= $a; $x++){
            for($y=1; $y <= $a; $y++)
                echo $x * $y . "\t";
            echo "<br>";
        }
    }

?>
