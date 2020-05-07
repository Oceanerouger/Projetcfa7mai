/* Slider page atelier2bis.php  CURSEURB*/
var slider3 = document.getElementById("curseurc");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}

function getValue3() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input3 = document.getElementById("curseurc").value;
  // j'affiche la valeur récupérer du slider
  alert(input3);
}
var user = document.getElementById("form");

// Au clic sur le bouton #search je lance la fonction

$('form').on('click', function(){

    // J'initialise le variable curseura
    var curseurc = $('#curseurc').val();
    // Je définis ma requête ajax
    $.ajax({
        type: 'post',
        // Adresse à laquelle la requête est envoyée
        url: 'curseurconnect.php',
        async: true,
        data: 'curseurc=' + curseurc + '&submit=true'+ user ,
        // Le délai maximun en millisecondes de traitement de la demande
        timeout: 4000,

        // La fonction à apeller si la requête aboutie
        success: function (data) {
            // Je charge les données dans box
           $('#curseurc').html(data);
            console.log(curseurc);
        },

        // La fonction à appeler si la requête n'a pas abouti
        error : function(resultat, statut, erreur){
        console.log(erreur);
        }

    });

});
