window.onload = function() {
    //console.log(str.slice(0,2));
    //console.log(arr.pop(0));
    let personas = [
        { "nombre": "David", "edad": 27 },
        { "nombre": "Anthony", "edad": 13 },
        { "nombre": "Maria", "edad": 35 },
        { "nombre": "Robert", "edad": 15 },
    ];
    
    const cFrutas = ["Pera", "Manazana", "Platano"];
    // Arrays
    let nombres = new Array("Robert", "Paul");
    
    let frutas = ["Pera", "Manzana", "Platano", "Pera"];
    
    if(frutas.includes("Pera")) {
        console.log("Pera existe en el array!");
    }
    
    console.log( frutas.indexOf("Pera") );            // 0
    console.log( frutas.lastIndexOf("Pera") );        // 3
    
    frutas.push("Pomelo");
    frutas.sort(); // Ordena el array
    
    // Objeto
    let user = {"name": "Peter"};

    // Comprobar si un elemento existe en un array
    let edades = [1, 5, 10, 15, 18];
    
    // reduce
    // El método reduce() ejecuta una función reductora sobre cada
    // elemento de un array, devolviendo como resultado un único valor.
    let totalNumeros = edades.reduce(function(acumulador, valor) {
        return acumulador + valor;
    }); // 1 + 5 = 6 // 6 + 10 = 16 // 16 + 15 = 31
    
    // every
    // Determina si TODOS los elementos en el array satisfacen una condición.
    //console.log( edades.every(n => n => 18) );
    let todosSonMayoresDe18 = edades.every(function(n) {
        return n >= 18;
    });
    // console.log(todosSonMayoresDe18); // false
    
    // some
    // El método some(), a diferencia de every() comprueba si AL MENOS UN elemento 
    // del array cumple con la condición implementada por la función proporcionada.
    let algunoEsMayorDe18 = edades.some(function(n) {
        return n >= 18;
    });
    // console.log(algunoEsMayorDe18); // true
    
    // map
    // El método map() crea un nuevo array con los resultados de la llamada
    // a la función indicada aplicados a cada uno de sus elementos.
    let dobles = edades.map(function(x) {
        return x * 2;
    });
    // el array dobles tiene los valores: [2, 10, 20, 30]
    // numeros aun tiene los valores: [1, 5, 10, 15]
    
    // findIndex
    let indexManzana = frutas.findIndex(function(fruta){
        return fruta === "Manzana";
    }); // 1
    
    // find
    // El método find() devuelve el valor del primer elemento
    // del array que cumple la función de prueba proporcionada.
    let persona = personas.find(function(persona) {
        return persona.nombre === "David";
    });
    console.log(persona.nombre); // David
    
    // filter
    // El método filter() crea un nuevo array con todos los elementos
    // que cumplan la condición implementada por la función dada.
    let personasMayores = personas.filter(function(persona){
        return persona.edad >= 18;
    }); // Este array solo contiene los objetos Maria y David
};
