<?php


try
{
	$bdd = new PDO('mysql:host=localhost;dbname=restaurant;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$id =$_GET['id'];

echo $id;

//delete a menu
function del_menu($bdd,$id){
    $req1 = $bdd->prepare('DELETE FROM menu WHERE id=:id ');
    $req1->execute(array(
      'id' => $id
    )
    );
    }

    //header('Location: http://localhost/dev_agile/index.php');

?>