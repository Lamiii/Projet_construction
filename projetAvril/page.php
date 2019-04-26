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
    
    <div class="container icons">
        <img src="images/icon.jpg" class="icon"><h5 class="ic"><?php echo $afficher['nom']." ".$afficher['prenom']?></h5>
    </div>
                  

    
</body>
</html>
