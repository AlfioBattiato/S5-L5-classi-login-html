<?php
class Casa
{
    public $id;
    public $nome;
    public $prezzo;
    public $img;

    // Costruttore per inizializzare le proprietà dell'oggetto
    public function __construct($id, $nome, $prezzo, $img)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->img = $img;

    }
    function render()
    {
        echo '<div class="col-6 col-md-4 col-lg-3">';
        echo '<div class="card" style="width: 100% ;">';
        echo '<img src="' . $this->img . '" class="card-img-top  object-fit-cover" style="height:15rem;width:100%" alt="img">';
        echo '<div class="card-body">';
        echo '<h5>' . 'Casa: ' . $this->nome . '</h5>';
        echo '<p>Prezzo mensile: € <span class="badge text-bg-dark">' . $this->prezzo . '</span></p>';
        echo '<a href="delete.php?id= ' . $this->id . '" class="btn btn-danger">Elimina</a>';

        echo '<button type="button" class="btn btn-success ms-2" data-bs-toggle="modal" data-bs-target="#casa'.$this->id.'">Modifica </button>';

        echo '    <div class="modal fade" id="casa'.$this->id.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">';
        echo '       <div class="modal-dialog">';
        echo '        <div class="modal-content">';
        echo '           <div class="modal-header">';
        echo '           <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>';
        echo '          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '       </div>';
        echo '      <div class="modal-body">';
        ?>
        <form method="post" action='modifica.php?id=<?php echo $this->id; ?>'>
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" value="<?= $this->nome?>" id="nome" aria-describedby="nome" required>
            </div>
            <div class="mb-3">
                <label for="prezzo" class="form-label">Prezzo</label>
                <input type="number" class="form-control"  value="<?= $this->prezzo?>" name="prezzo" id="prezzo" required>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label">Url immagine</label>
                <input type="text" class="form-control"  value="<?= $this->img?>" name="img" id="img" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php echo '   </div>';



        echo '</div></div></div></div></div></div>';
    }

}




