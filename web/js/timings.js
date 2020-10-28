window.onload = function() {
    let secs = 1;
    
    // Se ejecuta cada segundo
    let interval = setInterval(function(){ 
        document.getElementsByTagName("p")[0].innerHTML = secs;
        secs++;
    }, 1000);  
    
    // Se ejecuta una vez solamente, cuando pasan 5 segundos.
    setTimeout(function(){ 
        document.getElementsByTagName("p")[0].innerHTML = "Han pasado " + secs + " segundos.";
        clearInterval(interval);
    }, 5000);  
};
