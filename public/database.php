<?php

try{
    $conn = new PDO('mysql:dbname=test;host=mysql', 'krishna', 'KriShna824@32', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch(PDOException $e){
    $errorMsg = 'Database Error';
    $errorMsg .= $e->getMessage();
    echo $errorMsg;
    exit();
}

?>