// Todos los navegadores tienen un conjunto de API web integradas 
// para admitir operaciones complejas y ayudar a acceder a los datos.
// Por ejemplo, la API de geolocalización puede devolver las 
// coordenadas de la ubicación del navegador.

// GEO API
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition( (position) => {
        console.log("Latitude: " + position.coords.latitude + " Longitude: " + position.coords.longitude);
    });
  } else {
    console.log("Geolocation is not supported by this browser.");
  }
}
// getLocation();

// Storage API
// La API de almacenamiento web es una sintaxis simple para almacenar y recuperar datos en el navegador.
// El objeto localStorage proporciona acceso a un almacenamiento local para un sitio web en particular. 
// Le permite almacenar, leer, agregar, modificar y eliminar elementos de datos para ese dominio.
// Los datos se almacenan sin fecha de vencimiento y no se eliminarán cuando se cierre el navegador.
// localStorage.setItem("name", "John Doe");
console.log( localStorage.getItem("name") );

// El objeto sessionStorage es idéntico al objeto localStorage.
// La diferencia es que el objeto sessionStorage almacena datos para una sesión.
// Los datos se eliminan cuando se cierra el navegador.
// sessionStorage.setItem("name", "John Doe"); 
console.log( sessionStorage.getItem("name") ); 
