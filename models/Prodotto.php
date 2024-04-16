<?php

include("./Categoria.php");
include("./models/Traits.php");
class Prodotto
{

    use params_prod;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria)
    {

        $this->setPrezzo($prezzo);
        $this->setTitolo($titolo);
        $this->setIcon($icona_categoria);
        $this->setTipo($tipo_articolo);
        $this->setImmagine($immagine);
        $this->setCategoria($categoria);
    }


    // SETTER METHODS
    use setterProd;



    // GETTER METHODS
    use getterProd;



    public function get()
    {
        return "NIENTE";
    }
}
