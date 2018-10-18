function CreationOffre()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/CreationOffre",
            success:function(data)
            {
                $("#lstServices").empty();
                $("#creationOffre").empty();
                $("#creationOffre").append(data);
            },
            error:function()
            {
                alert("Erreur: Creation de l'offre");
            }
        }
    );
}
function insertionCreationOffre()
{
    var tabOffre = Array();
    $('input[type=checkbox]').each
    (
        function()
        {
            tabOffre.push($(this).val());
            tabOffreUtil.push($(this).is(":checked"));
        }
    );
    $.ajax
    (
        {
            url:"index.php/Welcome/InsertionOffre",
            type:'get',
            data:'tab1='+tabOffre+"&idOffre="+$("#idOffre").val()+"&descriptionOffre="+$("#descriptionOffre").val()+"&dateOffre="+$("#dateOffre").val()+"&idService="+$("#idService").val()+"&idUser="+$("#idUser").val(),
            success:function(data)
            {
                alert("Nouvelle offre créée");
                $("#listeOffre").empty();
                $("#CreationOffre").empty();
                $("#CreationOffre").append(data);
            },
            error:function()
            {
                alert("Erreur : Insertion de l'offre");
            }
        }
    );
}
function CreationDemande()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/CreationDemande",
            success:function(data)
            {
                $("#lstServices").empty();
                $("#CreationDemande").empty();
                $("#CreationDemande").append(data);
            },
            error:function()
            {
                alert("Erreur: Creation de la demande");
            }
        }
    );
}
function insertionCreationDemande()
{
    var tabDemande = Array();
    $('input[type=checkbox]').each
    (
        function()
        {
            tabDemande.push($(this).val());
            tabDemandeUtil.push($(this).is(":checked"));
        }
    );
    $.ajax
    (
        {
            url:"index.php/Welcome/InsertionDemande",
            type:'get',
            data:'tab1='+tabDemande+"&idDemande="+$("#idDemande").val()+"&descriptionDemande="+$("#descriptionDemande").val()+"&dateDemande="+$("#dateDemande").val()+"&idService="+$("#idService").val()+"&idUser="+$("#idUser").val(),
            success:function(data)
            {
                alert("Nouvelle demande créée");
                $("#listeDemande").empty();
                $("#CreationDemande").empty();
                $("#CreationDemande").append(data);
            },
            error:function()
            {
                alert("Erreur : Insertion de la demande");
            }
        }
    );
}
/*function Accueil(){
    //retour à la page d'accueil
}*/