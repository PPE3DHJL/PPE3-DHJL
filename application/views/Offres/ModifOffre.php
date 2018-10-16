<?php
    foreach($numOffre as $unNumOffre)
    {
        echo "Numero de l'offre'' <input type='text' disable='true' id='numOffre'";
    }
        echo "<option value='".$unNumOffre->idOffre."'><br>";
 
        echo "Description de l'offre' <input type='text' id='contenuOffre'><br>";
    foreach($description as $uneDescription)
    {
        echo "<option value='".$uneDescription->descriptionOffre."'>";
    }
        echo "</select><br>";


        echo "Date de l'offre'  <input type='text' id='dateOffre'><br>";
    foreach($dates as $uneDateOffre)
    {
        echo "<option value='".$uneDateOffre->dateOffre."'>";
    }
        echo "</select><br>";


        echo "Nom du service <select id='nomService'>";
    foreach($lesServices as $unService)
    {
        echo "<option value ='".$unService->idService."'>".$unService->nomService."</option>";
    }
        echo"</select><br><br>";


        echo "<input type='submit' value='Valider l'offre'' id='ValiderOffre' onclick='ValiderOffre()'>";
        echo "<input type='button' value='Retour à l'accueil id='Accueil' onclick='Accueil()'>";
        echo "</select><br>";
?>