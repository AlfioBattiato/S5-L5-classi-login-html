<?php

include_once __DIR__ . '/init.php';

$sql = "SELECT * FROM articoli";
$stmt = $pdo->query($sql);
$articoli = $stmt->fetchAll();

// echo "<pre>";

// var_dump($articoli);

// echo "</pre>";