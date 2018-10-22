<script>
// Get the modal
var modalSellRDD = document.getElementById('SellRDDModal');

// Get the button that opens the modal
var btnSellRDD = document.getElementById("SellRDDButton");

// Get the <span> element that closes the modal
var spanSellRDD = document.getElementsByClassName("closeSellRDDModal")[0];

// When the user clicks the button, open the modal 
btnSellRDD.onclick = function() {
    modalSellRDD.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanSellRDD.onclick = function() {
    modalSellRDD.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalSellRDD) {
        modalSellRDD.style.display = "none";
    }
}
</script>