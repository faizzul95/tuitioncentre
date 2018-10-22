<script>
// Get the modal
var modalBuyETH = document.getElementById('BuyETHModal');

// Get the button that opens the modal
var btnBuyETH = document.getElementById("BuyETHButton");

// Get the <span> element that closes the modal
var spanBuyETH = document.getElementsByClassName("closeBuyETHModal")[0];

// When the user clicks the button, open the modal 
btnBuyETH.onclick = function() {
    modalBuyETH.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanBuyETH.onclick = function() {
    modalBuyETH.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalBuyETH) {
        modalBuyETH.style.display = "none";
    }
}
</script>