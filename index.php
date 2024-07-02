<?php

    trait Position
    {
        public string $titolo;
        public float $prezzo;
        public string $immagine;
        public Categoria $categoria;
        public string $tipo;
    }

    // class categoria
    require_once __DIR__. '/src/categoria.php';

    //class prodotto
    require_once __DIR__ . '/src/prodotto.php';

    // Creazione delle categorie
    $categoriaCani = new Categoria("Cani", '<i class="fa-solid fa-dog"></i>');
    $categoriaGatti = new Categoria("Gatti", '<i class="fa-solid fa-cat"></i>');



    // Creazione dei prodotti
    $prodotto1 = new Prodotto('Cibo per Cani', 10.99, 'https://www.supermercadosantamaria.com/documents/10180/10504/30762_G.jpg', $categoriaCani, 'Cibo');
    $prodotto2 = new Prodotto('Gioco per Gatti', 5.99, 'https://dojiw2m9tvv09.cloudfront.net/27184/product/X_torre-con-pluma-celeste2490.jpg?72&time=1719956274', $categoriaGatti, 'Gioco');
    $prodotto3 = new Prodotto('Cuccia per Cani', 30.00, 'https://m.media-amazon.com/images/I/719Q6-2eKVL.__AC_SX300_SY300_QL70_ML2_.jpg', $categoriaCani, 'Cuccia');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per Animali</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <?php
    // Stampa delle card
    $prodotto1->stampaCard();
    $prodotto2->stampaCard();
    $prodotto3->stampaCard();

    ?>
</body>

</html>