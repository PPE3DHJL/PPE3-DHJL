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
                alert('Erreur: Creation offre')
            }
        }
    )
}