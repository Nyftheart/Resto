
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

	
//BASE DE DONNEE NON DISPONIBLE
//print of menu table
$menu = $bdd->query('SELECT * FROM menu');

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Test_menu</title>
</head>
<body>
	<div>
		<form action="add.php" method="post">
			<input name="title" placeholder="Titre"></br>
			<input name="category" placeholder="Catégorie"></br>
			<input name="delivery" placeholder="Temps de livraison"></br>
			<input name="price" placeholder="Prix"></br>
		<button type="submit">Ajouter</button>
	</div>

	<div>
		<?php
		while ($donnees = $menu->fetch())
		{
		?>
		<div class="about" style="border:black solid 2px; width :400px;display:flex;">
        <img src="images/menu-item-thumbnail-01.jpg" alt="article 1">
            <div class="overlay">
                <button type="button">Réserver</button>
        	</div>
    	<div class="product_description">
            <div class="product_stars">
                <p>5</p>
                <i class="fas fa-star" aria-hidden="true"></i> 
			</div>
			<h4 type="text" name="title" value="<?php $donnees['title']; ?>"><?php echo $donnees['title']; ?></h4>
			<h6>Catégorie :<?php echo $donnees['category']; ?></h6>
			<div class="product_desc">
				<div class="product_desc_liv">
					<p>Temps de Livraison :<?php echo $donnees['delivery']; ?></p>
				</div>
				<div class="product_desc_price">
					<p>Prix :<?php echo $donnees['price']; ?> <?php echo $donnees['id']; ?> </p>
				</div>
			</div>
			<form method="get" action="delete.php">
				<button type="submit" name="id" value="<?php $donnees['id']; ?>">Delete</button>
			</form>
		</div>
        </div>
		<?php
		}

		$menu->closeCursor();
  
		?>
		
	</div>
</body>
</html>