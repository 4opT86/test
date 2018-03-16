<?php
$a = array(1, 2, 3, 5, 7);

$sum=8;
function funct ($a,$sum){
    $s = array();
    for ($i = 0; $i < count($a); $i++) {
        for ($j = $i + 1; $j < count($a); $j++) {
            $result = $a[$i] + $a[$j];
            //echo $result.'<br>';
            //echo "$i, $j, $s <br>";
            if ($result == $sum) {
                $s[] = "$i,$j";

            }
        }
    }
    return $s;
}

$r = funct($a,$sum);
$r1 = funct($a,7);
print_r ($r1);
