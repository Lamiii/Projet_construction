<?php
session_start();
require 'admin/database.php';
$db = Database::connect();
/*$user = $db ->prepare("SELECT * FROM etapes WHERE id = ?");
$user ->execute(array($_SESSION['id']));
$afficher = $user->fetch();*/
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
		<link rel="stylesheet" type="text/css" href="css/admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
		<h1>Système d'administration</h1>
        
		<table class="table table-bordered">
		<thead>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Nom_projet</th>
                <th>Statuts</th>
                <th>Actions<a class="btn btn-success" href="admin/modifier.php">ajouter</a></th>
            </tr>
    </thead>
    <tbody>
        <?php

           $join = $db ->query("SELECT utilisateur.nom, utilisateur.prenom, utilisateur.email, utilisateur.contact, projet.categorie, projet.statut, projet.id FROM utilisateur, projet WHERE utilisateur.id = projet.user_id");
                 while ($affiche = $join ->fetch()) {
                    

                    ?>
    	<tr>
    		<td><?php echo $affiche['nom']?></td>
    		<td><?php echo $affiche['prenom']?></td>
    		<td><?php echo $affiche['email']?></td>
    		<td><?php echo $affiche['contact']?></td>
    		<td><?php echo $affiche['categorie']?></td>
    		<td><?php echo $affiche['statut']?></td>
    		<td><a class="btn btn-info" href="admin/view.php?id=<?php echo $affiche['id']?>"><span class="glyphicon glyphicon-eye-open"></span>voir</a>
    			<a class="btn btn-primary" href="admin/modifier.php?id=<?php echo $affiche['id']?>"><span class="glyphicon glyphicon-pencil"></span>modifier</a>
    			<a class="btn btn-danger" href="admin/supprimer.php?id=<?php echo $affiche['id']?> ">supprimer</a><span class="glyphicon glyphicon-remove"></span></a></td>
    	</tr>
        <?php } ?>
    </tbody>
    
	</table>
	</div>
	
	
</body>
</html>