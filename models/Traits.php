<?php
trait params_prod
{
    private $prezzo;
    private $titolo;
    private $icona_categoria;
    private $tipo_articolo;
    private $immagine;
    private $categoria;
}

trait setterProd
{
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;
    }

    public function setTitolo($titolo)
    {
        if (!is_string($titolo) or strlen($titolo) < 3)
            throw new Exception("Titolo is not a valid titolo");
        $this->titolo = $titolo;
    }

    public function setIcon($icona_categoria)
    {
        $this->icona_categoria = $icona_categoria;
    }

    public function setTipo($tipo_articolo)
    {
        $this->tipo_articolo = $tipo_articolo;
    }

    public function setImmagine($immagine)
    {
        $this->immagine = $immagine;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}

trait getterProd
{
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    public function getTitolo()
    {
        return $this->titolo;
    }

    public function getIcon()
    {
        return $this->icona_categoria;
    }

    public function getTipo()
    {
        return $this->tipo_articolo;
    }

    public function getImmage()
    {
        return $this->immagine;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }
}
