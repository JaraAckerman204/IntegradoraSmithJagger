
// Función para buscar y resaltar productos
function searchJuegos() {
  // Obtiene el texto de búsqueda ingresado por el usuario
  var searchText = document.getElementById("searchInput").value.toLowerCase();
  
  // Obtiene todos los botones de productos
  var juegos = document.getElementsByClassName("juego");
  
  // Itera sobre cada producto
  for (var i = 0; i < juegos.length; i++) {
    var juego = juegos[i];
    
    // Verifica si el texto de búsqueda coincide con el producto
    if (juego.innerText.toLowerCase().indexOf(searchText) !== -1) {
      // Agrega la clase "highlight" para resaltar el producto
      juego.classList.add("highlight");
      juego.scrollIntoView();
     

      
    } 
    
    
   
    else {
      // Remueve la clase "highlight" para restaurar el estilo original del producto
      juego.classList.remove("highlight");
    }
   
  }
 
}

// Asigna el evento click al botón de búsqueda
document.getElementById("searchButton").addEventListener("click", searchJuegos);



