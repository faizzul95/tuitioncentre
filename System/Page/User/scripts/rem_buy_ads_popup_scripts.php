<script>
// Get the modal
var modalRemBuyAds = document.getElementById('RemBuyAdsModal');

// Get the button that opens the modal
var btnRemBuyAds = document.getElementById("RemBuyAdsModalButton");

// Get the <span> element that closes the modal
var spanRemBuyAds = document.getElementsByClassName("closeRemBuyAdsModal")[0];

// When the user clicks the button, open the modal 
btnRemBuyAds.onclick = function() {
    modalRemBuyAds.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanRemBuyAds.onclick = function() {
    modalRemBuyAds.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalRemBuyAds) {
        modalRemBuyAds.style.display = "none";
    }
}
</script>