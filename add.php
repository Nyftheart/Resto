
<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$title = $_POST['title'];
$category  = $_POST['category'];
$price = $_POST['price'];
$delivery  = $_POST['delivery'];

function add_menu($bdd,$title,$category,$price,$delivery){
$req = $bdd->prepare('INSERT INTO menu(title , category,price,delivery) VALUES(:title ,:category,:price,:delivery )');
$req->execute(array(
	'title' => $title,
	'category' => $category,
	'price' => $price,
	'delivery' => $delivery
	));
}
//



add_menu($bdd,$title,$category,$price,$delivery);
header('Location: http://localhost/dev_agile/index.php');
?>