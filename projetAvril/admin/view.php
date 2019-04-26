<?php
require 'database.php';
if (isset($_GET)){
  $id = $_GET['id'];
  $db = Database::connect();
  $join = $db ->query("SELECT utilisateur.nom, utilisateur.prenom, utilisateur.email, utilisateur.contact, projet.categorie, projet.statut, projet.etapes, projet.images, projet.id FROM utilisateur, projet WHERE utilisateur.id = projet.user_id AND projet.id = ".$id);
  $affiche = $join->fetch();
}
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
	<h1 class="text-logo"><span class="glyphicon glyphicon-info-sign"> Information sur le projet </h1>
         <div class="container admin">
            <div class="row">
            
               <div class="col-sm-6">
                    <h1><strong>nom</strong></h1>
                    <br>
                    <form>
                      
                      <div class="form-group">
                        <label>Nom: <?php echo $affiche['nom']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Prenom: <?php echo $affiche['prenom']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Email: <?php echo $affiche['email']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Contact: <?php echo $affiche['contact']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Nom projet: <?php echo $affiche['categorie']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Statut: <?php echo $affiche['statut']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Etape: <?php echo $affiche['etapes']; ?></label>
                      </div>
                      <div class="form-group">
                        <label>Image: <?php echo $affiche['images']; ?></label>
                      </div>
                      </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="admin.html"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
                      <a class="btn btn-primary" href="" onclick="window.print();"><span class="glyphicon glyphicon-arrow-left"></span> Imprimer</a>
                    </div>
                </div> 
                <div class="col-sm-6 site">
                    <div class="thumbnail">
                        <img src="/images/<%= produit.image %>" alt="...">
                    </div>
                </div>
            </div>
        </div>
</body>
</html>