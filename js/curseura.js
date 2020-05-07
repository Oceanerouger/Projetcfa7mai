/* Slider page atelier2bis.php  CURSEURB*/
var slider = document.getElementById("curseura");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

function getValue() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input = document.getElementById("curseura").value;
  // j'affiche la valeur récupérer du slider
  alert(input);
}
var user = document.getElementById("form");

// Au clic sur le bouton #search je lance la fonction

$('form').on('click', function(){

    // J'initialise le variable curseura
    var curseura = $('#curseura').val();
    // Je définis ma requête ajax
    $.ajax({
        type: 'post',
        // Adresse à laquelle la requête est envoyée
        url: 'curseurconnect.php',
        async: true,
        data: 'curseura=' + curseura + '&submit=true'+ user ,
        // Le délai maximun en millisecondes de traitement de la demande
        timeout: 4000,

        // La fonction à apeller si la requête aboutie
        success: function (data) {
            // Je charge les données dans box
           $('#curseura').html(data);
            console.log(curseura);
        },

        // La fonction à appeler si la requête n'a pas abouti
        error : function(resultat, statut, erreur){
        console.log(erreur);
        }

    });

});
