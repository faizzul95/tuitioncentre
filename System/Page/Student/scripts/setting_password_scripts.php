<script>
// Get the modal
var modalPassword = document.getElementById('myPasswordModal');

// Get the button that opens the modal
var btnPassword = document.getElementById("myPasswordBtn");

// Get the <span> element that closes the modal
var spanPassword = document.getElementsByClassName("closemyPassword")[0];

// When the user clicks the button, open the modal 
btnPassword.onclick = function() {
    modalPassword.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
spanPassword.onclick = function() {
    modalPassword.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modalPassword) {
        modalPassword.style.display = "none";
    }
}
</script>