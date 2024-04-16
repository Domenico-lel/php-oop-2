<?php

include("./models/Prodotto.php");
include("./models/Giochi.php");
include("./models/Cibo.php");
include("./models/Cucce.php");
include("./models/Categoria.php");




try{

    $array_prodotti = [
    
        $prod1 = new Giochi("30$", "RoyalCanin", "icon_cat", "giochi", "img_prod", new Categoria("🐶"), "pallina"),
    
        $prod2 = new Cibo("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("😺"),"15kg"),
    
        $prod3 = new Cibo("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("😺"),"15kg"),
    
        $prod4 = new Cucce("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("🐶"),"40x40cm"),
    
        $prod5 = new Cucce("30$", "RoyalCanin", "icon_cat", "cibo", "img_prod", new Categoria("🐶"),"40x40cm"),
    
    ];

} catch(Exception $e){

    echo "ERRORE: " . $e -> getMessage();
}
