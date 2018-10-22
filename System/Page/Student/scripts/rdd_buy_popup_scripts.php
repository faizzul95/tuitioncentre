<script>
// Get the modal
var modalBuyRDD = document.getElementById('BuyRDDModal');

// Get the button that opens the modal
var btnBuyRDD = document.getElementById("BuyRDDButton");

// Get the <span> element that closes the modal
var spanBuyRDD = document.getElementsByClassName("closeBuyRDDModal")[0];

// When the user clicks the button, open the modal 
btnBuyRDD.onclick = function() {
    modalBuyRDD.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanBuyRDD.onclick = function() {
    modalBuyRDD.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalBuyRDD) {
        modalBuyRDD.style.display = "none";
    }
}
</script>