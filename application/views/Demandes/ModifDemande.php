<?php
    foreach($numDemande as $unNumDemande)
    {
        echo "Numero de la demande' <input type='text' disable='true' id='numDemande'";
    }
        echo "<option value='".$unNumDemande->idDemande."'><br>";
 
        echo "Description de la demande <input type='text' id='contenuDemande'><br>";
    foreach($description as $uneDescription)
    {
        echo "<option value='".$uneDescription->descriptionDemande."'>";
    }
        echo "</select><br>";


        echo "Date de la demande  <input type='text' id='dateDemande'><br>";
    foreach($dates as $uneDateDemande)
    {
        echo "<option value='".$uneDateDemande->dateDemande."'>";
    }
        echo "</select><br>";


        echo "Nom du service <select id='nomService'>";
    foreach($lesServices as $unService)
    {
        echo "<option value ='".$unService->idService."'>".$unService->nomService."</option>";
    }
        echo"</select><br><br>";


        echo "<input type='submit' value='Valider la demande' id='ValiderDemande' onclick='ValiderDemande()'>";
        echo "<input type='button' value='Retour à l'accueil id='Accueil' onclick='Accueil()'>";
        echo "</select><br>";
?>