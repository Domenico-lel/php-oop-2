<?php

class Giochi extends Prodotto
{
    private $tipologia;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria, $tipologia)
    {
        parent::__construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria);

        $this->set($tipologia);
    }

    public function set($tipologia)
    {
        $this->tipologia = $tipologia;
    }

    public function get()
    {
        return $this->tipologia;
    }
}
