/* Slider page atelier2bis.php  CURSEURB*/
var slider2 = document.getElementById("curseurc");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}

function getValue2() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input2 = document.getElementById("curseurc").value;
  // j'affiche la valeur récupérer du slider
  alert(input2);
}
var user = document.getElementById("form");

// Au clic sur le bouton #search je lance la fonction

$('form').on('click', function(){

    // J'initialise le variable curseura
    var curseura = $('#curseurc').val();
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
