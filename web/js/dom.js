 
let elements = document.getElementsByClassName("box");
//let elements = document.getElementsByTagName("p");
//let element = document.getElementById("demo");
//let elements = document.querySelectorAll("p.intro"); 

for(element of elements) {
    element.innerHTML = "Box " + Math.random();
    element.draggable = element.draggable == true ? false: true;
    element.style.fontWeight = "bold";
}

// crea un nuevo div 
// y añade contenido 
var newDiv = document.createElement("div"); 
var newContent = document.createTextNode("Box "); 
newDiv.appendChild(newContent); //añade texto al div creado. 

// añade el elemento creado y su contenido al DOM 
let container = document.getElementsByClassName("container")[0];
container.appendChild(newDiv);

// let links = document.anchors; // Todos los <a> con el atributo name
console.log(document.baseURI);
console.log(document.readyState); // Loading
setTimeout(() => { console.log(document.readyState); }, 2000); // complete
console.log(document.doctype);
//console.log(document.domain);

//document.body
//document.head
//document.scripts
//document.forms
//document.images
