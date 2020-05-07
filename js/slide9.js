/* Slider page atelier5.php  CURSEURJ*/
var slider9 = document.getElementById("myRange9");
var output9 = document.getElementById("demo9");
output9.innerHTML = slider9.value;

slider9.oninput = function() {
  output9.innerHTML = this.value;
}

function getValue9() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input = document.getElementById("myRange9").value;
  // j'affiche la valeur récupérer du slider
  alert(input);
}