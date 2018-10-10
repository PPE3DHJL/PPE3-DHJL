<h2>Demandes</h2>
<div id="demandes">
<?php 
foreach ($demandes as $key => $demande) {
    $data['demande']=$demande;
    $this->load->view('badge/demande',$data);
}

?>
</div>

