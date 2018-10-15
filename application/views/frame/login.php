<?php  $r=rand(1,6);?> 
<div id="login-block">
	<form action="<?php echo base_url('login/tryauthent')?>" name="login-form" method="POST" role="form">
		<legend>Authentification :</legend>
		<div class="form-group">
			<label for="">Login</label>
			<input type="text" class="form-control" name="login" id="login-input" placeholder=""/>
			<label for="">Mot de passe</label>
			<input type="password" class="form-control" name="pass" id="mdp-input" placeholder=""/>
		</div>
		<div class="forms-buttons">
			<button type="reset" class="btn btn-warning">reset</button>
			<button id="try-login"  class="btn btn-primary">Connexion</button>
		</div>
	</form>
</div>
