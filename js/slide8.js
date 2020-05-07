/* Slider page atelier4.php  CURSEURI*/
var slider8 = document.getElementById("myRange8");
var output8 = document.getElementById("demo8");
output8.innerHTML = slider8.value;

slider8.oninput = function() {
  output8.innerHTML = this.value;
}

function getValue8() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input = document.getElementById("myRange8").value;
  // j'affiche la valeur récupérer du slider
  alert(input);
}