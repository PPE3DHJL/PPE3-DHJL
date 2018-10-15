<<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page d'inscription</title>
   
</head>
<body>

            <h2><center>Inscrivez-vous</center> </h2> 
         
           <div class="form-group"> 
                <h5>Nom</h5>
                <input type="text" class="form-control" name="nom"  value="Votre nom">
            </div> 
            <div class="form-group">
                <h5>Prénom</h5>
                <input type="text" class="form-control" name="prenom"  value="Votre prénom">
            </div>
            <div class="form-group">
                <h5>Identifiant</h5>
                <input type="login" class="form-control" name="login"  value="Votre identifiant">
            </div>
            <div class="form-group">
                <h5>Mot de passe</h5>
                <input type="password" class="form-control" name="mdp" value="Votre mot de passe">
            </div>

           
        <button  id="submit" class="btn btn-primary">Inscription</button>
    <div id="progress" style="display:none;text-align:center;"><img src="img/progress.gif"/></div>


</body>
</html>