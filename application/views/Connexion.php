<form role="form" method="post" action="<?php echo base_url('ControleurConnexion/login_User'); ?>">
<fieldset>
<div class="form-group" >
<input class="form-control" placeholder="Login" name="login" type="text" required autofocus>
</div>
<div class="form-group">
<input class="form-control" placeholder="Mot de passe" name="mdp" type="password" value="" >
</div><br><br>
 
<input class="btn btn-lg btn-success btn-block" type="submit" value="Connexion" name="connexion" >
 
</fieldset>
</form>