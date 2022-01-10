<?php

require_once __DIR__ . '/database.php';

$discs = [];

if($_GET['genre'] === 'all'){
    $discs = $database;
}else{
    foreach($database as $disc){
        if($_GET['genre'] === $disc['genre']){
            $discs[] = $disc;
        }
    }
}

header("Content-Type: application/json;charset=utf-8");
echo json_encode($discs);