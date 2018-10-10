<div class="service" >
    <img src="<?php echo site_url($service->photoService); ?>" style="display:inline-block;max-width:64px;size:auto;vertical-align:top;" alt="">
    <div style="display:inline-block;height:100%;">
        
            <h2><?php
                    echo $service->nomService;
            ?></h2>
            
        
    </div>
<div><h3 style="display:inline;">liste des offres :</h3>
<a href="<?php  echo site_url('offres/create');?>"><button type="button" class="btn btn-primary">Ajouter Offre</button></a>

<div id="offres">
<?php
//var_dump($offres);
foreach ($offres as $key => $offre) {
              //  $this->load->model('Model_Service');
               // $data= $this->Model_Service->getServiceById($srvc->idService);   
               $data['offre']= $offre;
                echo  '<a href="'.site_url('offres/view/'.$offre->idOffre).'">';
               $this->load->view('badge/offre',$data); 
               echo '</a>';
            }
                ?>

</div>
</div>
    <?php //print_r($service);?></div>
</div>