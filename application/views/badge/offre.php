<div class="widget-badge">
<img src="<?php  echo site_url($offre->photoService);?>" style="max-width:64px;size:auto;" />
<div>
   
    <div ><?php echo $offre->idOffre.':'. $offre->dateOffre;?></div>
<div ><?php echo $offre->nomService;?></div>
<div >par :<?php echo $offre->idUser.':'. $offre->nomUser;?></div>  
<?php //print_r($service);?>
</div>
</div>



    
    <?php // print_r($offre);?> 