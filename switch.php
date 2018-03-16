<?php
for ($i=1; $i<=100; $i++) {
    echo '<br>';
    switch ($i) {
        case $i % 15 == 0:
            echo 'fizbaz';
            break;
        case $i % 5 == 0:
            echo 'baz';
            break;
        case $i % 3 == 0:
            echo 'fiz';
            break;
        default :
            echo $i;
            break;
    }

}