<script>
// Get the modal
var modalSellBTC = document.getElementById('SellBTCModal');

// Get the button that opens the modal
var btnSellBTC = document.getElementById("SellBTCButton");

// Get the <span> element that closes the modal
var spanSellBTC = document.getElementsByClassName("closeSellBTCModal")[0];

// When the user clicks the button, open the modal 
btnSellBTC.onclick = function() {
    modalSellBTC.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanSellBTC.onclick = function() {
    modalSellBTC.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalSellBTC) {
        modalSellBTC.style.display = "none";
    }
}
</script>