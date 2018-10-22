<script>
// Get the modal
var modalRemSellAds = document.getElementById('RemSellAdsModal');

// Get the button that opens the modal
var btnRemSellAds = document.getElementById("RemSellAdsModalButton");

// Get the <span> element that closes the modal
var spanRemSellAds = document.getElementsByClassName("closeRemSellAdsModal")[0];

// When the user clicks the button, open the modal 
btnRemSellAds.onclick = function() {
    modalRemSellAds.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanRemSellAds.onclick = function() {
    modalRemSellAds.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalRemSellAds) {
        modalRemSellAds.style.display = "none";
    }
}
</script>