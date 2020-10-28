// AJAX
function loadAJAX() {
    let ajax = new XMLHttpRequest();
    ajax.onreadystatechange = function() {
        let codeTag = document.getElementById("mycode");
        
        if(this.readyState == 4 && this.status == 200)
            codeTag.innerHTML = this.responseText;
    }
    ajax.open("GET", "https://www.w3schools.com/js/ajax_info.txt", true);
    ajax.send();
    
}
// FETCH
function loadFetch() {
    fetch('https://www.w3schools.com/js/ajax_info.txt').then(function(response) {
        if(response.ok) {
            console.log("Todo fue bien.");
        } else {
            console.log('Respuesta de red OK pero respuesta HTTP no OK');
        }
    }).catch(function(error) {
        console.log('Hubo un problema con la petición Fetch:' + error.message);
    });
}
