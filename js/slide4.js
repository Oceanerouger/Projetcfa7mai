/* Slider page atelier2bis.php  CURSEURB*/
var slider4 = document.getElementById("curseure");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}

function getValue4() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input4 = document.getElementById("curseure").value;
  // j'affiche la valeur récupérer du slider
  alert(input4);
}
var user = document.getElementById("form");

// Au clic sur le bouton #search je lance la fonction

$('form').on('click', function(){

    // J'initialise le variable curseura
    var curseurc = $('#curseure').val();
    // Je définis ma requête ajax
    $.ajax({
        type: 'post',
        // Adresse à laquelle la requête est envoyée
        url: 'curseurconnect.php',
        async: true,
        data: 'curseure=' + curseure + '&submit=true'+ user ,
        // Le délai maximun en millisecondes de traitement de la demande
        timeout: 4000,

        // La fonction à apeller si la requête aboutie
        success: function (data) {
            // Je charge les données dans box
           $('#curseure').html(data);
            console.log(curseure);
        },

        // La fonction à appeler si la requête n'a pas abouti
        error : function(resultat, statut, erreur){
        console.log(erreur);
        }

    });

});
