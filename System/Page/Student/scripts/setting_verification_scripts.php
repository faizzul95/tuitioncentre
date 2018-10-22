<script>
// Get the modal
var modalVerification = document.getElementById('myVerificationModal');

// Get the button that opens the modal
var btnVerification = document.getElementById("myVerificationBtn");

// Get the <span> element that closes the modal
var spanVerification = document.getElementsByClassName("closemyVerification")[0];

// When the user clicks the button, open the modal 
btnVerification.onclick = function() {
    modalVerification.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanVerification.onclick = function() {
    modalVerification.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalVerification) {
        modalVerification.style.display = "none";
    }
}
</script>