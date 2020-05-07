/* Slider page atelier3.php  CURSEURH*/
var slider7 = document.getElementById("myRange7");
var output7 = document.getElementById("demo7");
output7.innerHTML = slider7.value;

slider7.oninput = function() {
  output7.innerHTML = this.value;
}

function getValue7() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input = document.getElementById("myRange7").value;
  // j'affiche la valeur récupérer du slider
  alert(input);
}