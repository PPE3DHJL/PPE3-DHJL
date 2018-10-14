<?php
    foreach($numOffre as $unNumOffre)
    {
    echo "Numero de l'offre' <input type='text' disable='true' id='numOffre' value='".$unNum->idOffre."'><br>";
    }
    echo "Description de l'offre <input type='text' id='contenuOffre'><br>";
    echo "Date de l'offre  <input type='text' id='dateOffre'><br>";
    echo "Nom du service <select id='nomOffre'>";




    foreach($description as $uneDescription)
    {
        echo "<option value='".$uneDescription->descriptionOffre."'>";
    }
    echo "</select><br>";


    echo "Date de l'offre <select id='dateOffre'>";
    foreach($dates as $uneDate)
    {
        echo "<option value='".$uneDate->dateOffre."'>";
    }
    echo "</select><br>";

    echo "Nom du service <select id='nomService'>";

/* rajout de la liste avec les services*/


    echo "</select><br>";
    echo "<input type='button' value='Valider l'offre' id='ValiderOffre' onclick='ValiderOffre()'>"
    /*echo "<input type='button' value='Retour à l'acceuil id='Acceuil' onclick='Acceuil()'>"*/
?>