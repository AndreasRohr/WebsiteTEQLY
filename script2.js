//Texte für Referenzen - Netzwerk und Support
var baeckereiMeier = "text für meier";
var guesthouseLelocle = "text für lelocle";
var emmaBnb = "text für emma";
var kulturhofHinteregg = "text für kulturhof";
var artOfMetal = "text für artofmetal";
var grundgut = "text für grundgut";

//Texte für Personalverleih
var eventOn = "text für eventon"

//Texte für Referenzen - Webauftritte
var coreMio = "Text für CoreMio"
var savoldi = "Text für savoldi"

//Texte für Custom Solutions
var praxisDZ = "Text für DZ"
var inselspitalBern = "Text für Inselspital"
var scBern = "Text für sc bern"

//Texte für Rental
var xana = "Text für xana"
var kantonBern = "Text für Kanton Bern"

//zuletzt gedrückter Button jeweiliger Reihe
//N - Network, R - Rental, L - Lease, H - Homepage, C - Custom
var lastButtonPressedNR1;
var lastButtonPressedNR2;
var lastButtonPressedRR1;
var lastButtonPressedLR1;
var lastButtonPressedHR1;
var lastButtonPressedCR1;

var text
var btnid;


function descNetworkR1(text, btnid){

    var content = document.getElementById("content-nr1");
    content.innerHTML = text;
    var btns = document.querySelectorAll(".collapsible-nr1");

    btns.forEach(el => {
        if(el.classList.contains("active")){
            el.classList.toggle("active");
        }
    })

    if(lastButtonPressedNR1 === btnid){
        content.style.maxHeight = null;
        document.getElementById(btnid).classList.toggle("active");
        lastButtonPressedNR1 = null;
    }else{
        content.style.maxHeight = content.scrollHeight + "px";
        lastButtonPressedNR1 = btnid;
    }
    document.getElementById(btnid).classList.toggle("active");
}

function descNetworkR2(text, btnid){

    var content = document.getElementById("content-nr2");
    content.innerHTML=text;
    var btns = document.querySelectorAll(".collapsible-nr2");

    btns.forEach(el => {
        if(el.classList.contains("active")){
            el.classList.toggle("active");
        }
    })

    if(lastButtonPressedNR2 === btnid){
        content.style.maxHeight = null;
        document.getElementById(btnid).classList.toggle("active");
        lastButtonPressedNR2 = null;
    }else{
        content.style.maxHeight = content.scrollHeight + "px";
        lastButtonPressedNR2 = btnid;
    }
    document.getElementById(btnid).classList.toggle("active");
}

function descRentalR1(text, btnid){

    var content = document.getElementById("content-rr1");
    content.innerHTML=text;
    var btns = document.querySelectorAll(".collapsible-rr1");

    btns.forEach(el => {
        if(el.classList.contains("active")){
            el.classList.toggle("active");
        }
    })

    if(lastButtonPressedRR1 === btnid){
        content.style.maxHeight = null;
        document.getElementById(btnid).classList.toggle("active");
        lastButtonPressedRR1 = null;
    }else{
        content.style.maxHeight = content.scrollHeight + "px";
        lastButtonPressedRR1 = btnid;
    }
    document.getElementById(btnid).classList.toggle("active");
}

function descLeaseR1(text, btnid){

    var content = document.getElementById("content-lr1");
    content.innerHTML=text;
    var btns = document.querySelectorAll(".collapsible-lr1");

    btns.forEach(el => {
        if(el.classList.contains("active")){
            el.classList.toggle("active");
        }
    })

    if(lastButtonPressedLR1 === btnid){
        content.style.maxHeight = null;
        document.getElementById(btnid).classList.toggle("active");
        lastButtonPressedLR1 = null;
    }else{
        content.style.maxHeight = content.scrollHeight + "px";
        lastButtonPressedLR1 = btnid;
    }
    document.getElementById(btnid).classList.toggle("active");
}

function descHomepageR1(text, btnid){

    var content = document.getElementById("content-hr1");
    content.innerHTML=text;
    var btns = document.querySelectorAll(".collapsible-hr1");

    btns.forEach(el => {
        if(el.classList.contains("active")){
            el.classList.toggle("active");
        }
    })

    if(lastButtonPressedHR1 === btnid){
        content.style.maxHeight = null;
        document.getElementById(btnid).classList.toggle("active");
        lastButtonPressedHR1 = null;
    }else{
        content.style.maxHeight = content.scrollHeight + "px";
        lastButtonPressedHR1 = btnid;
    }
    document.getElementById(btnid).classList.toggle("active");
}



function descCustomR1(text, btnid){

    var content = document.getElementById("content-cr1");
    content.innerHTML=text;
    var btns = document.querySelectorAll(".collapsible-cr1");

    btns.forEach(el => {
        if(el.classList.contains("active")){
            el.classList.toggle("active");
        }
    })

    if(lastButtonPressedCR1 === btnid){
        content.style.maxHeight = null;
        document.getElementById(btnid).classList.toggle("active");
        lastButtonPressedCR1 = null;
    }else{
        content.style.maxHeight = content.scrollHeight + "px";
        lastButtonPressedCR1 = btnid;
    }
    document.getElementById(btnid).classList.toggle("active");
}
