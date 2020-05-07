/* Slider page atelier2bis.php  CURSEURB*/
var slider1 = document.getElementById("curseurb");
var output1 = document.getElementById("demo1");
output1.innerHTML = slider1.value;

slider1.oninput = function() {
  output1.innerHTML = this.value;
}

function getValue1() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input1 = document.getElementById("curseurb").value;
  // j'affiche la valeur récupérer du slider
  alert(input1);
}
var user = document.getElementById("form1");

// Au clic sur le bouton #search je lance la fonction

$('form1').on('click', function(){

    // J'initialise le variable curseura
    var curseura = $('#curseurb').val();
    // Je définis ma requête ajax
    $.ajax({
        type: 'post',
        // Adresse à laquelle la requête est envoyée
        url: 'curseurconnect.php',
        async: true,
        data: 'curseurb=' + curseurb + '&submit=true'+ user ,
        // Le délai maximun en millisecondes de traitement de la demande
        timeout: 4000,

        // La fonction à apeller si la requête aboutie
        success: function (data) {
            // Je charge les données dans box
           $('#curseurb').html(data);
            console.log(curseurb);
        },

        // La fonction à appeler si la requête n'a pas abouti
        error : function(resultat, statut, erreur){
        console.log(erreur);
        }

    });

});
