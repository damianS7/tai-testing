window.onload = function() {
    let bar = document.getElementById("mybar");
    // Ejecucion cada segundo
    setInterval(function(){ 
        if (bar.value < bar.max) {
            bar.value++;
        }
    }, 1000);  
};
