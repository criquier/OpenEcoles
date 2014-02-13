/**Fonction qui permet de poster un message
 * Cette fonction utilise ajax
 **/
urlpost = "";
urlreceive = "";

function initializeVar(urlp,urlr){
    urlpost = urlp;
    urlreceive = urlr;
}


function postMessage() {
    // On lance la requête ajax
    // type: POST > nous envoyons le message
    // On encode le message pour faire passer les caractères spéciaux comme +
    var message = encodeURIComponent($("#message").val());
    // le message est posté s'il n'est pas vide
    if(message!=''){
        $.ajax({
        type: "POST",
        url: urlpost,
        data:{
            message:$("#message").val()
            },
        success: function(data){
            // On vide la zone de texte
            $("#message").val('');
            $("#test").val(data["message"]);
            // on resélectionne la zone de texte, en cas d'utilisation du bouton "Envoyer"
            $("#message").focus();
            },
        error: function(msg){
            // On alerte d'une erreur
            alert('Erreur');
            }
        });
    }
}


/**
 *
 *  fonction qui permet de reactuliser les chat pour voir les derniers messages reçus
 *  reloadtime represente le temps de rechargement d'une page
 */
var reloadTime = 1000;
function getMessages() {

    // On lance la requête ajax
    $.getJSON(urlreceive,
function(data) {
    $("#conversation").contents('');
    $("#conversation").html(data['messages']);
    });
}

/**
 * Fonction qui ecoute les posts de messages
 */
function postListener(){
    $("#message").keyup(function(e) {
        if(e.keyCode == 13) { // KeyCode de la touche entrée
            {
                // on post le message car l'utilisarteur a appuyer sur la touche entrée
                // alert('vous avez appuyé sur entrée');
                postMessage();
            }
        }
    });
}

/**
 *
 * Fonction qui permet de parametrer les ecoutes de message reçues
 */
function setMessageListener(){
    // Au chargement de la page, on effectue cette fonction
    $(document).ready(function() {
        //if(document.getElementById('conversation')) {
        // actualisation des messages
        window.setInterval(getMessages, reloadTime);
        // on sélectionne la zone de texte
        $("#message").focus();
        // }
    });
}