<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $pdo = new PDO("mysql:host=localhost;dbname=restaurant", "root", "", array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
?>

<?php

$nom_resto = 'PizzaLuigi';

//$requeteSQL = "INSERT INTO commande (nom_restaurant, menu, boisson, sauce)";
//$requeteSQL .= " VALUE ('PizzaLuigi', 'Marguerita', 'Coca 330ml', 'Sauce barbecue')";
//$result = $pdo->exec($requeteSQL);
?>

    <!-- Section commandes à préparer -->
    <section style = "display : block;"> <!-- Bloc centré (display block) -->
        <h2 style = text-align:center;> Commandes en cours de préparation </h2>

        <div style ="display : flex; margin : 20px; justify-content:center; text-align:center;"> <!--  -->
            <?php
                $result = $pdo->query("SELECT * FROM commande WHERE deletion_flag = 0 ORDER BY id_commande DESC");

                while ($commande = $result->fetch(PDO::FETCH_OBJ)) {
            ?>

                    <div style="border : 2px solid black; margin: 20px; text-align:center; ">
                        <h4 style = "text-align :center;"> Menu : <?php echo $commande->menu; ?></h4>
                        <h4 style = "border : 1px solid black;"></h4>
                        <div style = "display:flex; justify-content :center;">
                            <h4 style = "margin-right : 10px;"> <?php echo $commande->boisson; ?></h4>
                            <h4><?php echo $commande->dessert; ?></h4>
                        </div>
                        <div style = "display : flex; justify-content:center;">
                            <h4 style = "margin-right : 10px"> <?php echo $commande->sauce?> </h4>
                            <h4> <?php echo $commande->supplement?></h4>
                        </div>
                        <button> Valider préparation </button>
                    </div>

            <?php } ?>

        </div>

    </section>


<!-- Séparation -->
    <div style = "border : 2px solid black;">
    </div>


    <!-- Section commandes préparées -->
    <section style = "display : block;"> <!-- Bloc centré (display block) -->
        <h2 style = text-align:center;> Commandes préparées </h2>

        <div style ="display : flex; margin : 20px; justify-content:center; text-align:center;"> <!--  -->
            <?php
                $result = $pdo->query("SELECT * FROM commande WHERE deletion_flag = 1 ORDER BY id_commande DESC");

                while ($commande = $result->fetch(PDO::FETCH_OBJ)) {
            ?>

                    <div style="border : 2px solid black; margin: 20px; text-align:center; ">
                        <h4 style = "text-align :center;"> Menu : <?php echo $commande->menu; ?></h4>
                        <h4 style = "border : 1px solid black;"></h4>
                        <div style = "display:flex; justify-content :center;">
                            <h4 style = "margin-right : 10px;"> <?php echo $commande->boisson; ?></h4>
                            <h4><?php echo $commande->dessert; ?></h4>
                        </div>
                        <div style = "display : flex; justify-content:center;">
                            <h4 style = "margin-right : 10px"> <?php echo $commande->sauce?> </h4>
                            <h4> <?php echo $commande->supplement?></h4>
                        </div>
                    </div>

            <?php } ?>

        </div>

    </section>
    
</body>
</html>