function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    document.getElementById("main").style.display="none";
    document.body.style.height = "100%";
    document.body.style.overflow = "hidden";
    document.getElementById("side-navbar").style.display="none";
    document.getElementById("navbtnContact").style.visibility="visible";


}
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.display="block";
    document.body.style.height = "";
    document.body.style.overflow = "";
    document.getElementById("side-navbar").style.display="";

}

// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("homebtnContact");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
    document.getElementById("body").style.overflow = "none";

}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
})


var btn2 = document.getElementById("navbtnContact");

btn2.onclick = function() {
    modal.style.display = "block";
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction2() {
    document.getElementById("sidenav-myDropdown").classList.toggle("sidenav-show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.sidenav-dropbtn')) {

        var dropdowns = document.getElementsByClassName("sidenav-dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('sidenav-show')) {
                openDropdown.classList.remove('sidenav-show');
            }
        }
    }
}




