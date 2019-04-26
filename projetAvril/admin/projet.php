<?php
session_start();

require 'database.php';

if (isset($_POST)) {
	$categorie = $_POST['projet'];
	$description_projet = $_POST['description'];
	$statut = 'en attente';
	$etape = 0;
	$description_et = 0;
	$delai = 0;
	$images = 0;
    $id_use = $_SESSION['id'];
    
    $db = Database::connect();
	$insert = $db->prepare("INSERT INTO projet(`categorie`, `description_projet`,`statut`, `etapes`, `description_etape`, `delai`, `images`, `user_id`) VALUES (?,?,?,?,?,?,?,?)");
	$insert->execute(array($categorie, $description_projet, $statut, $etape, $description_et, $delai, $images, $id_use));
	header("location:../page.php");

}
else{
	header('location:../page2.php');
}
function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>