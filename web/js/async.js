// Async : Las llamadas asincronas son implementadas
// mediante setTimeout y setInterval
// 1 Forma de uso de setTimeout
setTimeout(myFunction, 3000);
function myFunction() {
  console.log("Hello World!1");
}
// 2 Forma de uso de setTimeout 
setTimeout( function () {
    console.log("Hello World!2");
}, 3000);
// 3 Forma de uso de setTimeout (arrow function)
setTimeout( () => {
    console.log("Hello World!3");
}, 5000);

// Promise: Una promesa representa un valor que
// puede estar disponible ahora, en el futuro, o nunca.
let miPrimeraPromise = new Promise((resolve, reject) => {
  // Llamamos a resolve(...) cuando lo que estabamos haciendo finaliza con éxito, y reject(...) cuando falla.
  // En este ejemplo, usamos setTimeout(...) para simular código asíncrono. 
  // En la vida real, probablemente uses algo como XHR o una API HTML5.
  setTimeout(function(){
    // resolve("¡Éxito!"); // ¡Todo salió bien!
      reject("Fail");
  }, 250);
}).then((successMessage) => {
  // succesMessage es lo que sea que pasamos en la función resolve(...) de arriba.
  // No tiene por qué ser un string, pero si solo es un mensaje de éxito, probablemente lo sea.
  console.log("¡Sí! " + successMessage);
}).catch((failMessage) => {
  console.log("¡No! " + failMessage);
});

// async: La palabra clave async antes de una función hace que la función devuelva una promes
async function f2() {
    // await: La palabra clave await antes de que una función haga que la función espere una promesa
    // La palabra clave await solo se puede utilizar dentro de una función asincrónica.
    var y = await 20; 
    console.log(y); // 20
}
f2();

