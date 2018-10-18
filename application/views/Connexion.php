<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Troc de Temps</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,700,300'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'>
<script type="text/javascript" src="JS/mesFonctions.js"></script>

      <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>CSS/style1.css">

      <script type="text/javascript">
    $
    (
        function()
        {
            $("#connexion").click(connexion);
            (
              function()
              {
                getUser();
              }
            );
        }
    );
</script>

  
</head>

<body>

  <div class="signup__container">
  <div class="container__child signup__thumbnail">
    
    <div class="thumbnail__content text-center">
      <h1 class="heading--primary">Connectez vous !</h1>
    </div>
    
    
  </div>
  <div class="container__child signup__form">
    <form action="#">
      <div class="form-group">
        <label for="username">Votre identifiant : </label>
        <input class="form-control" type="text" name="login" id="login" required />
      </div>
      <div class="form-group">
        <label for="password">Votre mot de passe : </label>
        <input class="form-control" type="password" name="mdp" id="mdp" required />
      </div>
      <div class="m-t-lg">
        <ul class="list-inline">
          <li>
            <input class="btn btn-outline-success" type="submit" id ="connexion" value="Connexion" />
          </li>
          <li>
            <a class="signup__link" href="<?php echo site_url('ControlerInscription/pageInscription') ?>">Inscrivez vous !</a>
          </li>
        </ul>
      </div>
    </form>  
  </div>
</div>
</body>

</html>