<?php

include __DIR__ . '/init.php';


$myid= $_GET["id"];

echo $myid;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $prezzo = $_POST['prezzo'];
    $img = $_POST['img'];
    $stmt = $pdo->prepare("UPDATE articoli SET nome = :nome, prezzo = :prezzo, img = :img WHERE id = :id");
    $stmt->execute([
        'id' => $myid,
        'nome' => $nome,
        'prezzo' => $prezzo,
        'img' => $img,

    ]);
    header('Location: admin.php');

}




