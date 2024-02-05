<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <?php


    class Prodotto
    {
    }


    class Carrello
    {
        public function aggiungiProdotto(Prodotto $prodotto)
        {
            $this->prodotti[] = $prodotto;
            $this->totale += $prodotto->prezzo;
        }
    }


    class Categoria
    {
    }

    class Cliente
    {
    }


    class Shop
    {
    }


    class Card
    {
    }


    class Ordine
    {
        public function aggiungiProdotto(prodotto $prodotto)
        {
            $this->prodottiOrdinati[] = $prodotto;
            $this->totaleOrdine += $prodotto->prezzo;
        }
    }


    class Pagamento
    {
    }

    ?>
</body>

</html>