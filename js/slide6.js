/* Slider page atelier3.php CURSEURG*/
var slider6 = document.getElementById("myRange6");
var output6 = document.getElementById("demo6");
output6.innerHTML = slider6.value;

slider6.oninput = function() {
  output6.innerHTML = this.value;
}
function getValue6() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input = document.getElementById("myRange6").value;
  // j'affiche la valeur récupérer du slider
  alert(input);
}