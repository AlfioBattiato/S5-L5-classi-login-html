<?php

include_once __DIR__.'/init.php';



$myid= $_GET["id"];

// DELETE
$stmt = $pdo->prepare("DELETE FROM articoli WHERE id = ?");
$stmt->execute([$myid]);

header('Location: admin.php');