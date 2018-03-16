<?php
error_reporting(E_ALL);
$a=3;
$b=5;
$c=15;
function fizbaz ($a,$b,$c)
{
    for ($i = 1; $i <= 100; $i++) {
        echo '<br>';
                  if ($i % $c == 0) {
           echo 'fizbaz';
        } elseif ($i % $b == 0) {
           echo 'baz';
        } elseif ($i % $a == 0) {
           echo 'fiz';
        }
        else {
              echo $i;
        }
    }
    return $i;
}
$d=fizbaz ($a,$b,$c);
$d1=fizbaz($a,$b,$c=7);
echo $d1;



