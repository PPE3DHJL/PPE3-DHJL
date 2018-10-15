<div id="divInscription">
       <div id="login-image">
        <img src="<?php echo ($loginType!='login')? 'img/newuser.png':'img/user.png'?>" />
        </div>

            <h2><center>Inscrivez-vous</center> </h2> 
         
           <div class="form-group"> 
                <h5>Nom</h5>
                <input type="text" class="form-control" name="Nom" placeholder="" value="Votre nom">
            </div> 
            <div class="form-group">
                <h5>Prénom</h5>
                <input type="text" class="form-control" name="Prénom" placeholder="" value="Votre prénom">
            </div>
            <div class="form-group">
                <h5>Identifiant</h5>
                <input type="login" class="form-control" name="Identifiant" placeholder="" value="Votre identifiant">
            </div>
            <div class="form-group">
                <h5>Mot de passe</h5>
                <input type="password" class="form-control" name="motdepasse" placeholder="" value="Votre mot de passe">
            </div>

           
        <button  id="submit" class="btn btn-primary">Inscription</button>
    <div id="progress" style="display:none;text-align:center;"><img src="img/progress.gif"/></div>


