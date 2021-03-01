<?php
    function sum($a, $b){
        $start = $sum = 0;
        $length = 0;

        if($a <= $b){
            $length = $b - $a;
            $start = $a + 1;

            for($i=1;$i<$length;$i++){
                if($start % 2 == 0){
                    $sum = $sum + $start;
                }
                ++$start;
            }
        }else{
            $length = $a - $b;
            $start = $b - 1;
            for($i=1;$i<$length;$i++){
                if($start % 2 == 0){
                    $sum = $sum + $start;
                }
                ++$start;
            }
        }
        echo $sum;
    }

    sum(1,5);