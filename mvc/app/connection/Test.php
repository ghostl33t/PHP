<?php
$url = 'info.json';
$data = file_get_contents($url);
$test = json_decode($data);
echo $test[0]->Password;

?>