
/* Slider page atelier3.php CURSEURF*/
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
}
function getValue5() {
  // Je récupère la valeur de l'id "myRange"=> pourcentage
  var input = document.getElementById("myRange5").value;
  // j'affiche la valeur récupérer du slider
  alert(input);
}