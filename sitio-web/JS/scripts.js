// Obtener todos los overlays de la galería
var overlays = document.querySelectorAll('.overlay');

// Obtener el modal y la imagen dentro del modal
var modal = document.getElementById('myModal');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");

// Iterar sobre cada overlay y agregar un evento de clic
overlays.forEach(function(overlay) {
  overlay.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.previousElementSibling.src;
    captionText.innerHTML = this.querySelector(".text").innerHTML;
  }
});

// Obtener el elemento de cierre y cerrar el modal cuando se haga clic en él
var span = document.getElementsByClassName("close")[0];
span.onclick = function() { 
  modal.style.display = "none";
}
