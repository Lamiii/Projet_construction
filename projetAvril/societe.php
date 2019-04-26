<!DOCTYPE html>
<html>
<head>
	<title>Projet construction</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <h1>INSCRIPTION</h1>
        <form method="post" action="admin/inscritS.php">
          <div class="row">
            <div class="col-md-6">
              <label>
                  <p class="label-txt">Nom de la société ou structure</p>
                  <input type="text" class="input" name="nom">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
                <label>
                  <p class="label-txt">Entrez le mail</p>
                  <input type="text" class="input" name="mail">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
                <label>
                  <p class="label-txt">Votre mot de passe</p>
                  <input type="text" class="input" name="pwd">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
                <label>
                    <p class="label-txt">Adresse de la société</p>
                    <input type="text" class="input" name="adresse">
                    <div class="line-box">
                      <div class="line"></div>
                   </div>
                </label>
            </div>
            <div class="col-md-6">
              <label>
                  <p class="label-txt">Contact de la société</p>
                  <input type="text" class="input" name="tel">
                  <div class="line-box">
                    <div class="line"></div>
                  </div>
                </label>
                <label>
                    <p class="label-txt">Ville</p>
                    <input type="text" class="input" name="ville">
                    <div class="line-box">
                      <div class="line"></div>
                   </div>
                </label>
                <label>
                  <p class="label-txt">Le nom de votre projet</p>
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
          </div>
                
                <button type="submit">Envoyer</button>
        </form>
</body>
</html>