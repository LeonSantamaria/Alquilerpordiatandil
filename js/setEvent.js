
function setEvent() {
    let contenedor = [];
    contenedor = document.querySelectorAll(".card");
    
    for (let cont of contenedor) {
        cont.addEventListener("click", showCard); 
    }
}

function showCard() {
    
    this.classList.toggle("card2"); 
   
     
}