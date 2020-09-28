<?php

//Fonction modifier le menu
session_start();

require_once('connectbdd.php');

include("header.inc.php"); //Inclure le header de page
 
$bdd = new PDO('mysql:host=127.0.0.1;dbname=restaurant', 'root', '');
 
if(isset($_SESSION['nom_du_menu_a_modifier'])) {
   $req = $bdd->prepare("SELECT * FROM table_de_la_base_de_donnee_pour_menu WHERE numUtil = ?");
   $req->execute(array($_SESSION['table_de_la_base_de_donnee_pour_menu']));
   $userinfo = $req->fetch();
    if(isset($_POST['newname']) AND !empty($_POST['newname']) AND $_POST['newname'] != $userinfo['name']) {
      $newname = htmlspecialchars($_POST['newname']);
      $insertname = $bdd->prepare("UPDATE table_de_la_base_de_donnee_pour_menu SET nomUtil = ? WHERE numUtil = ?");
      $insertname->execute(array($newname, $_SESSION['nom_du_menu_a_modifier']));
      header('Location: la_page_de_reservation?nom_du_menu_a_modifier='.$_SESSION['nom_du_menu_a_modifier']);
    }
// à la suite on rajouterait une page html de menu
?>

