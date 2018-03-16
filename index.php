<?php
$connection = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', '18112013');
$result=$connection->query('SELECT * FROM articles ORDER BY date DESC ',PDO::FETCH_ASSOC);
$posts=array();
foreach($result as $row) {
    $posts[]=$row;
}
//print_r($posts);
include 'list.html';