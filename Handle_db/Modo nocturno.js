
const modoNocturnoToggle = document.getElementById("modoNocturnoToggle");
const body = document.body;

modoNocturnoToggle.addEventListener("change", () => {
    if (modoNocturnoToggle.checked) {
        
        body.classList.add("modo-nocturno");
    } else {
       
        body.classList.remove("modo-nocturno");
    }
});
