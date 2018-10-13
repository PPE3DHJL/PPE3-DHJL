<h1>

    Services </h1>
<div style=" height:60vh;">
    
    
    <div id="services">
       <?php
            foreach ($services as $key => $srvc) {
              //  $this->load->model('Model_Service');
               // $data= $this->Model_Service->getServiceById($srvc->idService);   
               $data['service']= $srvc;
             echo  '<a href="'.site_url('services/view/'.$srvc->idService).'">';
               $this->load->view('badge/service',$data); 
               echo '</a>';
            }
       ?>

    </div>
    <div id="consommer" ><h2>consommer</h2></div>    
</div>
