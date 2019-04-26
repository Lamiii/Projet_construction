<!DOCTYPE html>
<html>
<head>
	<title>Projet construction</title>
	<meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        
        <head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"/></head>
        <div class="container">
            <div class="row">
                
                 <h1><i class="fa fa-lock" aria-hidden="true"></i> Login</h1>
               
            </div><br /><br />
                 
                <form method="post" action="admin/connect.php" role="form">
                    <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                    </div>
                       <input type="text" name="mail" class="form-control" placeholder="Votre mail"/>
                </div><br />
                 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-key icon"></i></span>
                    </div>
                        <input type="Password" name="pwd" class="form-control" placeholder="Mot de passe"/>
                </div><br />
                    <div class="checkbox">
                      <label><input type="checkbox" value=""/>Me rappeler</label>
                    </div><br />
                      <a class="btn btn-success" href="index.php"><span class="glyphicon glyphicon-off"></span>Retour</a>
                 
                <button class="btn btn-primary" type="button submit"><span class="glyphicon glyphicon-remove"></span>Connexion</button><br />
                       <br /><center><div style="border:1px solid black;height:1px;width:300px;"></div></center><br />
                <div class="footer">
                          <p>Avez-vous un compte ?<a href="inscription.php">S'inscrire ici</a></p>
                  <p>Mot de passe<a href="#"> oublié ?</a></p>
                </div>
                </form>
                
         
        </div>
        
</body>
</html>