<?php 

$file = file_put_contents('//input');

$file_type = $_SERVER['HTTP_X_FILE_TYPE'];
$name = $_SERVER['HTTP_X_FILE_NAME'];


echo $name.' '.$file_type;