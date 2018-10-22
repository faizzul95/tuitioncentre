<script>
// Get the modal
var modalSellETH = document.getElementById('SellETHModal');

// Get the button that opens the modal
var btnSellETH = document.getElementById("SellETHButton");

// Get the <span> element that closes the modal
var spanSellETH = document.getElementsByClassName("closeSellETHModal")[0];

// When the user clicks the button, open the modal 
btnSellETH.onclick = function() {
    modalSellETH.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanSellETH.onclick = function() {
    modalSellETH.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalSellETH) {
        modalSellETH.style.display = "none";
    }
}
</script>