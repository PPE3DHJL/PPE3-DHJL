<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inscription</title>
  </head>
  <body>
  <form role="form" method="post" action="<?php echo base_url('ControleurConnexion/inscription'); ?>">
                      <h3>Inscription</h3>
                  </div>   
                    <br><br>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Nom + Prénom" name="nomUser" type="text">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Login" name="login" type="text">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Mot de passe" name="mdp" type="password">
                              </div><br><br>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Inscription" name="register" >
                      </form><br>
                  </div>
  </body>
</html>