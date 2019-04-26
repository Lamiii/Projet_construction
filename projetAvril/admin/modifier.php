<?php
require 'database.php';
if (isset($_GET)) {
	$id = $_GET['id'];
	$db = Database::connect();
    $modif = $db ->query("SELECT utilisateur.nom, utilisateur.prenom, utilisateur.email, utilisateur.contact, utilisateur.password, utilisateur.ville, projet.categorie, projet.description_projet, projet.etapes, projet.description_etape, projet.id, projet.statut, projet.delai, projet.images FROM utilisateur, projet WHERE utilisateur.id = projet.user_id AND projet.id = ".$id);
	$modify = $modif->fetch();

    
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
	<form id="contact-form" method="post" action="modify.php" role="form">
                        <div class="row">
                            
                            <div class="col-md-6">
                                <label for="firstname" class="couleur-form">Nom <span class="blue">*</span></label>
                                <input id="firstname" type="text" name="nom" class="form-control" value="<?php echo $modify['nom']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="name" class="couleur-form">Prenom <span class="blue">*</span></label>
                                <input id="name" type="text" name="prenom" class="form-control" value="<?php echo $modify['prenom']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="couleur-form">Email <span class="blue">*</span></label>
                                <input id="email" type="text" name="email" class="form-control" value="<?php echo $modify['email']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="couleur-form">Mot de passe<span class="blue">*</span></label>
                                <input id="phone" type="password" name="pwd" class="form-control" value="<?php echo $modify['password']?>">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="password1" class="couleur-form">Contact<span class="blue">*</span></label>
                                <input id="password1" type="text" name="contact" class="form-control" value="<?php echo $modify['contact']?>">
                                <p class="comments"></p>
                            </div>

                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">Ville<span class="blue">*</span></label>
                                <input id="password2" type="text" name="ville" class="form-control" value="<?php echo $modify['ville']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">CategorieProjet<span class="blue">*</span></label>
                                <input id="password2" type="text" name="categorie" class="form-control" value="<?php echo $modify['categorie']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">DescriptionProjet<span class="blue">*</span></label>
                                <input id="password2" type="text" name="description" class="form-control" value="<?php echo $modify['description_projet']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">Statut<span class="blue">*</span></label>
                                <input id="password2" type="text" name="statut" class="form-control" value="<?php echo $modify['statut']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">Etape<span class="blue">*</span></label>
                                <input id="password2" type="text" name="etape" class="form-control" value="<?php echo $modify['etapes']?>" >
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">DescriptionEtape<span class="blue">*</span></label>
                                <input id="password2" type="text" name="descrit" class="form-control" value="<?php echo $modify['description_etape']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">Delai<span class="blue">*</span></label>
                                <input id="password2" type="text" name="delai" class="form-control" value="<?php echo $modify['delai']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">Images<span class="blue">*</span></label>
                                <input id="password2" type="text" name="image" class="form-control" value="<?php echo $modify['images']?>">
                                <p class="comments"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="password2" class="couleur-form">Id<span class="blue">*</span></label>
                                <input id="password2" type="text" name="id" class="form-control" value="<?php echo $modify['id']?>">
                                <p class="comments"></p>
                            </div>

                            
                            <div class="col-md-12">
                                <p class="blue"><strong>* Ces informations sont requises.</strong></p>
                            </div>
                            
                        </div>
                    
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-default button-form"><span class="glyphicon glyphicon-user">Modifier</span></button>

          <button type="button" class="btn btn-default button-form" data-dismiss="modal"><span class="glyphicon glyphicon-remove">Retour</span></button>
        </div>
        </form>
</body>
</html>