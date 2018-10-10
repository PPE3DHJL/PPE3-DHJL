<h1>Offres :</h1>
<div style=" height:60vh;overflow-y:auto;">
    
    
    <div id="offres">
       <?php
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
    <div id="consommer" ><h2>consommer</h2></div>    
</div>
