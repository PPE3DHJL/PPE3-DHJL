<div id="offre">
    <img src="<?php  echo site_url($offre->photoService);?>" alt="">
<div>
<h2>Offre <?php echo $offre->idOffre;?> du <?php echo $offre->dateOffre;?></h2>
    <h3>
        <?php echo $offre->nomService;?>
    </h3>
    <p>  <?php echo $offre->descriptionOffre;?></p>
    <div><?php print_r($offre);?></div>
    </div>

</div>