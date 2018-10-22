<script>
// Get the modal
var modalSocial = document.getElementById('mySocialAccModal');

// Get the button that opens the modal
var btnSocial = document.getElementById("mySocialAccBtn");

// Get the <span> element that closes the modal
var spanSocial = document.getElementsByClassName("closemySocialAcc")[0];

// When the user clicks the button, open the modal 
btnSocial.onclick = function() {
    modalSocial.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanSocial.onclick = function() {
    modalSocial.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalSocial) {
        modalSocial.style.display = "none";
    }
}
</script>