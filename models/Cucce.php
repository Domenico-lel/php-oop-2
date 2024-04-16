<?php

class Cucce extends Prodotto
{
    private $dimensione;

    public function __construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria, $dimensione)
    {
        parent::__construct($prezzo, $titolo, $icona_categoria, $tipo_articolo, $immagine, $categoria);

        $this->set($dimensione);
    }

    public function set($dimensione)
    {
        $this->dimensione = $dimensione;
    }

    public function get()
    {
        return $this->dimensione;
    }
}
