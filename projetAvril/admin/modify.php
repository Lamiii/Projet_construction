<?php
require 'database.php';
if (isset($_POST)) {
	
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];
	$password = $_POST['pwd'];
	$contact = $_POST['contact'];
	$ville = $_POST['ville'];
	$categorie = $_POST['categorie'];
	$description = $_POST['description'];
	$statut = $_POST['statut'];
	$etape = $_POST['etape'];
	$descrit = $_POST['descrit'];
	$delai = $_POST['delai'];
	$image = $_POST['image'];
	$id = $_POST['id'];

	$db = Database::connect();
	$modif = $db ->prepare("UPDATE utilisateur, projet SET utilisateur.nom = ?, utilisateur.prenom = ?, utilisateur.email = ?, utilisateur.password = ?, utilisateur.contact = ?, utilisateur.ville = ?, projet.categorie = ?, projet.description_projet = ?, projet.statut = ?, projet.etapes = ?, projet.description_etape = ?, projet.delai = ?, projet.images = ?,  projet.id = ? WHERE utilisateur.id = projet.user_id AND projet.id = ".$id);
	$modif->execute(array($nom, $prenom, $email, $password, $contact, $ville, $categorie, $description, $statut ,$etape, $descrit, $delai, $image, $id));
	header('location:../admin.php');
}
?>