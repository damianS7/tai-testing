window.onload = function() {
    let string = "Hola mundo! Hola mundo!";
    
    console.log(string.length); // Largo de la cadena
    
    // Cada caracter es una posicion
    // Posicion de la primera palabra mundo! 
    console.log(string.indexOf("mundo!")); // 5
    
    // Posicion de la ultima palabra mundo!
    console.log(string.lastIndexOf("mundo!")); // 17
    
    // El método search() ejecuta una búsqueda que encaje entre una 
    // expresión regular y el objeto String desde el que se llama.
    console.log(string.search("mundo!")); // 5
    
    
    // Extraccion de strings
    console.log(string.slice(0, 4)); // start, end. Acepta indices negativos (empieza desde el final)
    console.log(string.substring(0, 4)); // start, end. No acepta indices negativos
    console.log(string.substr(0, 4)); // start, length
    
    console.log(string.replace("Hola", "Wololo")); // Permite regex
    
    
    console.log(string.toUpperCase());
    console.log(string.toLowerCase());
    
    console.log(string.concat(" ", ":)"));
    
    
    console.log(string.trim());
    
    console.log(string.charAt(0)); // H
    console.log(string.charCodeAt(0)); // 72
    console.log(string[0]); // H
    
    console.log(string.split(" ")); // Convierte un string en array
    
};
