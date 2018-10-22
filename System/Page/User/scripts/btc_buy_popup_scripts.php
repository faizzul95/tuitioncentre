<script>
// Get the modal
var modalBuyBTC = document.getElementById('BuyBTCModal');

// Get the button that opens the modal
var btnBuyBTC = document.getElementById("BuyBTCButton");

// Get the <span> element that closes the modal
var spanBuyBTC = document.getElementsByClassName("closeBuyBTCModal")[0];

// When the user clicks the button, open the modal 
btnBuyBTC.onclick = function() {
    modalBuyBTC.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanBuyBTC.onclick = function() {
    modalBuyBTC.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalBuyBTC) {
        modalBuyBTC.style.display = "none";
    }
}
</script>