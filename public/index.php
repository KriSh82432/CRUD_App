<?php

$pdo = new PDO('mysql:dbname=test;host=mysql', 'krishna', 'KriShna824@32', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$query = $pdo->query('INSERT INTO PCLeadInfo (Id, LeadID) VALUES (3, 234);');

/*$query->execute();
$result = $query->fetchAll();

foreach ($result as $key) {
    echo $key['Id'];
}*/

$result = $query->fetch();

echo $result;