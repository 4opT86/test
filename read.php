<?php
$x=$_GET ['id'];
echo $x;
//die();
$connection = new PDO('mysql:host=localhost;dbname=articles;charset=utf8', 'root', '18112013');
$result=$connection->query('SELECT * FROM articles WHERE id=$x',PDO::FETCH_ASSOC);
$post=array();


