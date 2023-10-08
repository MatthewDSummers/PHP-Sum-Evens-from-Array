<?php
function sumEvensFromArray($int_array){
    $sum = 0;
    if ( is_array($int_array) ){
        foreach ( $int_array as $index => $int ){
            if ( is_int($int) ){
                if ( $int % 2 == 0 ){
                    $sum += $int;
                }
            }else{
                echo "Item at index " . $index . "is not an integer. Needs an array of integers as input";
                return false;
            }

        }
        return $sum;
    }else{
        echo "Needs an array of integers as input";
        return false;
    }
}

echo sumEvensFromArray([1,2,3,4]);
?>