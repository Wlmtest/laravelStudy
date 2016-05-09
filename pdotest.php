<?php
$opencart = "mysql:host=localhost;dbname=laraveldb" ;

$db = new PDO($opencart, 'laraveldb', 'wuliming');
$DD = $db->prepare('SELECT * FROM `test`');
$DD->execute();
$DD = $DD->fetchAll(PDO::FETCH_ASSOC);
var_dump($DD);