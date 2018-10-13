<h1>Offre :</h1>

<legend style="text-align:center;"><?php echo  ($typeEdition=='new')?'Creation Offre':'Edition de : $service->idService';?></legend>
 <div id="service"> 
     <img  src="<?php  //echo site_url($offre->photoService);?>"/>
    <div>
<?php //print_r($service);?>    
    <form method="POST" role="form">
       
  
        <div class="form-group">
            <label for="">Description de l'offre</label>
            <textarea type="text" class="form-control" id="" placeholder="Input field"></textarea>
        </div>
       
        <div class="form-group">
            <label for="">Nom du services</label>
            <input type="text" disabled class="form-control" id="" placeholder="Input field">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>
<?php
?>