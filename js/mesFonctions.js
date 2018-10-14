function CreationOffre()
{
    $.ajax
    (
        {
            type:"get",
            url:"index.php/Welcome/CreationOffre",
            success:function(data)
            {
                $("#listeOffre").empty();
                $("#creationOffre").empty();
                $("#creationOffre").append(data);
            },
            error:function()
            {
                alert("Erreur: Creation de l'offre");
            }
        }
    )
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
            data:'tab1='+tabOffre+"&idOffre="+$("#idOffre").val()+"&descriptionOffre="+$("#descriptionOffre").val()+"&dateoffre="+$("#dateOffre").val()+"&idService="+$("#idService").val()+"&idUser="+$("#idUser").val(),
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