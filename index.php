<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Animali</title>
</head>

<body>
    <div class="wrap">
        <?php
        include("./db.php");

        foreach ($array_prodotti as $prod) { ?>

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php
                        echo $prod->getTitolo();
                        ?>
                    </h5>
                    <p class="card-text">
                        <?php
                        echo $prod->getPrezzo();
                        ?>
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <?php
                        echo $prod->getIcon();
                        ?>
                    </li>

                    <li class="list-group-item">
                        <?php
                        echo $prod->getTipo();
                        ?>
                    </li>

                    <li class="list-group-item">
                        <?php
                        echo $prod->getImmage();
                        ?>
                    </li>

                    <li class="list-group-item">
                        <?php
                        echo $prod->get();
                        ?>
                    </li>
                </ul>
                <div class="card-body">
                    <?php
                    echo $prod->getCategoria()->getName();
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <style>
        .wrap {
            display: flex;
            flex-wrap: wrap;
        }
        
        .card {
            border: 1px solid black;
            text-align: center;
            width: 33%;
        }
    </style>





</body>

</html>
