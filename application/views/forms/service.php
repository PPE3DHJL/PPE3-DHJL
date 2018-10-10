 <legend style="text-align:center;">Edition de :<?php echo $service->idService;?></legend>
 <div id="service"> 
     <img  src="<?php  echo site_url($service->photoService);?>"/>
    <div>
<?php //print_r($service);?>    
    <form method="POST" role="form">
       
  
        <div class="form-group">
            <label for="">Nom du services</label>
            <input type="text" class="form-control" id="" placeholder="Input field">
        </div>
        <div class="form-group">
            <label for="">Category :</label>
           <select name="" id="">
    <option value="new">dj</option>

           </select>
        </div>
        <div class="form-group">
            <label for="">Nom du services</label>
            <input type="text" class="form-control" id="" placeholder="Input field">
        </div>
    
        
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>