<script>
// Get the modal
var modalRemBuyCoin = document.getElementById('RemBuyCoinModal');

// Get the button that opens the modal
var btnRemBuyCoin = document.getElementById("RemBuyCoinModalButton");

// Get the <span> element that closes the modal
var spanRemBuyCoin = document.getElementsByClassName("closeRemBuyCoinModal")[0];

// When the user clicks the button, open the modal 
btnRemBuyCoin.onclick = function() {
    modalRemBuyCoin.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanRemBuyCoin.onclick = function() {
    modalRemBuyCoin.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalRemBuyCoin) {
        modalRemBuyCoin.style.display = "none";
    }
}
</script>