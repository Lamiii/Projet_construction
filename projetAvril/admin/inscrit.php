<?php
require 'database.php';
if (isset($_POST)) {
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['mail'];
	$contact = $_POST['tel'];
	$mdp = $_POST['pwd'];
	$ville = $_POST['ville'];

	$db = Database::connect();
	$insert = $db->prepare("INSERT INTO utilisateur(`nom`, `prenom`, `email`, `contact`, `password`, `ville`) VALUES (?,?,?,?,?,?)");
	$insert->execute(array($nom, $prenom, $email, $contact, $mdp, $ville));

	header("location:../index.php");
}
else{
	header('location:../inscription.php');
}
function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
