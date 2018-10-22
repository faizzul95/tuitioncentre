<script>
// Get the modal
var modalSellPND = document.getElementById('SellPNDModal');

// Get the button that opens the modal
var btnSellPND = document.getElementById("SellPNDButton");

// Get the <span> element that closes the modal
var spanSellPND = document.getElementsByClassName("closeSellPNDModal")[0];

// When the user clicks the button, open the modal 
btnSellPND.onclick = function() {
    modalSellPND.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanSellPND.onclick = function() {
    modalSellPND.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalSellPND) {
        modalSellPND.style.display = "none";
    }
}
</script>