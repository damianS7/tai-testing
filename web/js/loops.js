let frutas = ["Pera", "Manzana", "Platano", "Pera"];

// Loop for
for (i = 0; i < frutas.length; i++) {
    console.log(frutas[i]);
}
    
// Loop for of
for(fruta of frutas) {
    console.log(fruta);
}
    
// Loop for in
for(index in frutas) {
    console.log(frutas[index]);
}
    
// Loop foreach
frutas.forEach(function(fruta) {
    console.log(fruta);
});

// map, filter, find, findIndex, reduce, every, some // Ver arrays.js
