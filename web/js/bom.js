document.cookie = "username=John Doe";
console.log(document.cookie);

console.log(window.innerWidth);
console.log(screen.width);
console.log(window.location);
// Redireccion
//window.location.href = "http://www.google.es";
// Ir atras
window.history.back()
// Ir adelante
window.history.forward()

// Abre una nueva ventana
//let myWindow = window.open();
let myPop = document.getElementById("myPop");
//setTimeout( () => { myPop.click(); } , 1000);

let clicked = 0;
function simulateClick() {
    if(clicked == 1) return;
    var evt = new MouseEvent("click", {
        bubbles: true,
        cancelable: true,
        view: window
    });
  
    var cb = document.getElementById("myPop"); //element to click on
    var canceled = !cb.dispatchEvent(evt);
    clicked = 1;
}
document.getElementById("button").addEventListener('click', simulateClick);
