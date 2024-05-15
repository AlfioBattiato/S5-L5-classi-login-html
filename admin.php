<?php
include __DIR__ . '/header.php';
include __DIR__ . '/classi/Casa.php';
include __DIR__ . '/getCard.php';
?>
<h1 class="mt-5">Sezione amministratore</h1>

<div class="row gy-3">

    <?php

    $case=[];

    foreach ($articoli as $e) {
        $case[]=new Casa($e['id'], $e['nome'], $e['prezzo'], $e['img']);
    }
    foreach ($case as $e) {
      
        $e->render();
    }
    ?>
</div>



<?php
include __DIR__ . '/footer.php';

?>