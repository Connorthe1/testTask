const modal = document.getElementById("modal");

const span = document.getElementById("close");

function openModal(item){
    modal.style.display = "block";
    document.getElementById("item").value = item;
}

span.onclick = function() {
    modal.style.display = "none";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}