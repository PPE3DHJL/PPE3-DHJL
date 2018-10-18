function connexion() {
    $.ajax({
        type: "POST",
        data: "login=" + $("input[name=login]").val() + "&mdp=" + $("input[name=mdp]").val(),
        success: function(data) {
            $("input[name=login]").val("");
            $("input[name=mdp]").val("");
        },
        error: function(data) {
            alert("Erreur: connexion");
        }
    }
    );
}

