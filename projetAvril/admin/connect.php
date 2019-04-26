<?php
require 'database.php';
if (isset($_POST)) {
	$mail = $_POST["mail"];
	$mdp = $_POST["pwd"];

	$db = database::connect();
	$verif = $db->prepare("SELECT * FROM utilisateur WHERE email = ? AND password = ?");
	$verif->execute(array($mail, $mdp));

	if ($test = $verif->fetch()) {
		session_start();
		$_SESSION['id'] = $test['id'];
		header("location:../page.php");
	}
	else{

		header("location:../connexion.php");
	}

	
}
?>