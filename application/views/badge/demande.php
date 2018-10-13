<div class="widget-badge">
<img src="<?php  echo site_url($demande->photoService);?>" style="max-width:64px;size:auto;" />
<div>
   
    <div ><?php echo $demande->idDemande.':'. $demande->dateDemande;?></div>
<div ><?php echo $demande->nomService;?></div>
<div >par :<?php echo $demande->idUser;//.':'. $demande->nomUser;?></div>  
<?php //print_r($service);?>
</div>
</div>



    
    <?php // print_r($offre);?> 