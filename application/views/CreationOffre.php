<?php
    foreach($numOffre as $unNumOffre)
    {
    echo "Numero de l'offre' <input type='text' disable='true' id='numOffre' value='".$unNumOffre->idOffre."'><br>";
    }
    echo "Description de l'offre <input type='text' id='contenuOffre'><br>";
    echo "Date de l'offre  <input type='text' id='dateOffre'><br>";
    echo "Nom du service <select id='nomService'>";

    foreach($description as $uneDescription)
    {
        echo "<option value='".$uneDescription->descriptionOffre."'>";
    }
    echo "</select><br>";

    echo "Date de l'offre <select id='dateOffre'>";
    foreach($dates as $uneDateOffre)
    {
        echo "<option value='".$uneDate->dateOffre."'>";
    }
    echo "</select><br>";

    echo "Nom du service <select id='nomService'>";
    echo "<select id='lstService' onchange=''>";
    foreach($lesServices as $unService)
    {
    echo "<option value ='".$unService->idService."'>".$unService->nomService."</option>";
    }
    echo"</select>";

    echo "<input type='submit' value='Valider l'offre' id='ValiderOffre' onclick='ValiderOffre()'>";
    echo "<input type='button' value='Retour à l'acceuil id='Acceuil' onclick='Acceuil()'>";
    echo "</select><br>";
?>