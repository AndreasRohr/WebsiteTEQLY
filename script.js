function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
    document.getElementById("side-navbar").style.display="none";
    document.getElementById("navbtnContact").style.visibility="visible";


}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.body.style.height = "";
    document.body.style.overflow = "";
    document.getElementById("side-navbar").style.display="";

}




// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("homebtnContact");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    document.getElementById("body").style.overflow = "none"
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


var btn2 = document.getElementById("navbtnContact");

btn2.onclick = function() {
    modal.style.display = "block";
}


















