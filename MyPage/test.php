<?php
$db = new PDO('sqlite:C:\Users\User\коды\php\MyPage\test.db'); 
$st = $db->query('CREATE TABLE data (
    name TEXT NOT NULL,
    surname TEXT NOT NULL,
    brothername TEXT NULL );');
$results = $st->fetchAll(); 
foreach ($results as $row) {echo $row['name']; } 
?>   