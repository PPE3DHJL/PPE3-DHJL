<?php

    echo "Numero de la demande' <input type='text' disable='true' id='numDemande' value='".$unNumDemande->idDemande."'><br>";
    echo "Description de la demande <input type='text' id='contenuDemande'><br>";
    echo "Date de la demande  <input type='text' id='dateDemande'><br>";
    echo "Nom du service <select id='nomService'>";

    foreach($description as $uneDescription)
    {
        echo "<option value='".$uneDescription->descriptionOffre."'>";
    }
    echo "</select><br>";

    echo "Date de la demande <select id='dateOffre'>";
    foreach($dates as $uneDateDemande)
    {
        echo "<option value='".$uneDateDemande->dateDemande."'>";
    }
    echo "</select><br>";

    echo "Nom du service <select id='nomService'>";
    echo "<select id='lstServices' onchange=''>";
    foreach($lesServices as $unService)
    {
    echo "<option value ='".$unService->idService."'>".$unService->nomService."</option>";
    }
    echo"</select>";

    echo "<input type='submit' value='Valider la demande' id='ValiderDemande' onclick='ValiderDemande()'>";
    echo "<input type='button' value='Retour à l'acceuil id='Acceuil' onclick='Acceuil()'>";
    echo "</select><br>";
?>