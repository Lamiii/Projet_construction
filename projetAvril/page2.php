<?php
session_start();
require 'admin/database.php';
$db = Database::connect();
$user = $db ->prepare("SELECT * FROM utilisateur WHERE id = ?");
$user ->execute(array($_SESSION['id']));
$afficher = $user->fetch();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Projet construction</title>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bod">
	<h1>NOUVEAU PROJET</h1>
  <div class="row col-md-8 offset-md-2">
    <form method="post" action="admin/projet.php">
          
            <div>
                  <p class="label-txt" style="padding-top: 14%;">La categorie de votre projet</p>
                  <div  style="padding-top: 3%;">
                    <select class="form-control" name="projet" style="background: transparent; color: black;">
                       <option>Construction maison</option>
                       <option>Construction immeubles</option>
                       <option>Construction ecole</option>
                       <option>Construction routes</option>
                       <option>Construction pont</option>
                    </select>
                  </div>
                  
                </label>
                <label>
                  <p class="label-txt">La description du projet</p>
                  <input type="text" class="input" name="description">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
                
            </div>
          
                
                <button type="submit">Envoyer</button>
        </form>
</body>
  </div>
        
</html>