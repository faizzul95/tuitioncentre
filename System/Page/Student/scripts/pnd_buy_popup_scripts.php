<script>
// Get the modal
var modalBuyPND = document.getElementById('BuyPNDModal');

// Get the button that opens the modal
var btnBuyPND = document.getElementById("BuyPNDButton");

// Get the <span> element that closes the modal
var spanBuyPND = document.getElementsByClassName("closeBuyPNDModal")[0];

// When the user clicks the button, open the modal 
btnBuyPND.onclick = function() {
    modalBuyPND.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanBuyPND.onclick = function() {
    modalBuyPND.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalBuyPND) {
        modalBuyPND.style.display = "none";
    }
}
</script>