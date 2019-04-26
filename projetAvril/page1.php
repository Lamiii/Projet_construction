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
		<link rel="stylesheet" type="text/css" href="css/style3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
          <a class="navbar-brand nom" href="#"><h2>Construct</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Services</a>
                    <a class="nav-item nav-link" href="#">projets</a>
              <a class="btn btn-outline-danger" href="admin/deconnect.php">Deconnexion</a>
            </div>
          </div>
        </nav>
    </header>
    <div class="snav">
            <div class="sidenav">
                    <a href="#about" class="menu">About</a>
                    <a href="page.php" class="menu">Profil</a>
                    <a href="page1.php" class="menu">Projets</a>
                    <a href="page2.php" class="menu">Nouveau projet</a>
                    <a href="#contact" class="menu">Contact</a>

            </div>
    </div>
    <div class="main" id="main">
      <div class="container icons">
        <img src="images/icon.jpg" class="icon">
        <h5 class="ic"><?php echo $afficher['nom']." ".$afficher['prenom']?></h5>
      </div>
    </div>
<div class="container col-md-8 offset-md-2">
  <div  class="divi">
    <h2>Consultez en temps reel</h2>

<img id="myImg" src="images/chic.jpeg" style="width:100%;max-width:300px; margin-top: 5%; margin-left: 5%">

<!-- The Modal -->

<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
  <div class="mod">
    <?php
$statement = $db->query('SELECT * FROM utilisateur, projet WHERE utilisateur.id = projet.user_id AND projet.id =' .$_SESSION['id']);
                    while ($affiche = $statement->fetch()) 
                    { ?>
    <b>Nom:</b><?php echo $affiche['categorie']?><br>
    <b>Statut:</b><?php echo $affiche['statut']?><br>
    <b>Etapes :</b><?php echo $affiche['etapes']?><br>
    <b>Delai :</b><?php echo $affiche['delai']?><br>
    <b>Images :</b> <img src="images/const.jpeg" class="rounded">
    <?php } ?>
  </div>
</div>
  </div>

        
</div>
</body>
</html>
<script>


var modal = document.getElementById('myModal');
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
