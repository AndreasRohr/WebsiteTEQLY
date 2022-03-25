<!--
Vorlage für weitere Referenzen

---HTML---

    <div class="collapse-row">
        <div class="collapse-card">

            ****ID setzen: kategorie-aufsteigendeNummer
            ****CLASS: collapsible-kategoriereihe  (im Beispiel: n(etwork)r(ow)1)
            ****ONCLICK: descKategorieReihe(name für text, gesetzt in JS, this.id)

            <button id="network-1" class="collapsible-nr1" onClick="descNetworkR1(baeckereiMeier, this.id)">Bäckerei Meier</button>
        </div>

        <div class="collapse-card">
            <button id="network-2" class="collapsible-nr1" onClick="descNetworkR1(guesthouseLelocle, this.id)">Guesthouse Lelocle</button>
        </div>

        <div class="collapse-card">
            <button id="network-3" class="collapsible-nr1" onClick="descNetworkR1(emmaBnb, this.id)">Emma Bed&Breakfast</button>
        </div>
    </div>

   ****ID setzen: content-kategoriereihe (im Beispiel: n(etwork)r(ow)1)
    <div id="content-nr1" class="content">
        <p></p>
    </div>


---JS---
 **** Variabel für Text (Name der Variabel muss mit onclick im HTML übereinstimmen)
 var baeckereiMeier = "text für meier";

 **** Variabel für zuletzt gedrückter Button
 var lastButtonPressedNR1;


 **** Name der Funktion: descKategorieReihe
 function descNetworkR1(text, btnid){

        ****GetElement ID anpassen (gesetzt im HTML)

        var content = document.getElementById("content-nr1");
        content.innerHTML = text;

        ****QuuerySelector anpassen (gesetzt im HTML)
        var btns = document.querySelectorAll(".collapsible-nr1");

        btns.forEach(el => {
            if(el.classList.contains("active")){
                el.classList.toggle("active");
            }
        })

        ****lastButton anpassen
        if(lastButtonPressedNR1 === btnid){
            content.style.maxHeight = null;
            document.getElementById(btnid).classList.toggle("active");
            lastButtonPressed1 = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
            lastButtonPressed1 = btnid;
        }

        document.getElementById(btnid).classList.toggle("active");
    }

-->





<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEQLY Referenzen</title>
    <style>

        [class^="collapsible-"] {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            height: 100px;
        }

        .active, [class^="collapsible-"]:hover {
            background-color: #555;
        }

        .collapse-row{
            display: flex;
        }

        .collapse-card{
            width: 33%;
        }

        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<?php include 'header.php' ?>

<div id="main" style="margin-top: 4rem">

    <h2>Unsere Referenzen</h2>

    <h3>Netzwerk & Support</h3>

    <div class="collapse-row">
        <div class="collapse-card">
            <button id="network-1" class="collapsible-nr1" onClick="descNetworkR1(baeckereiMeier, this.id)">Bäckerei Meier</button>
        </div>

        <div class="collapse-card">
            <button id="network-2" class="collapsible-nr1" onClick="descNetworkR1(guesthouseLelocle, this.id)">Guesthouse Lelocle</button>
        </div>

        <div class="collapse-card">
            <button id="network-3" class="collapsible-nr1" onClick="descNetworkR1(emmaBnb, this.id)">Emma Bed&Breakfast</button>
        </div>
    </div>
    <div id="content-nr1" class="content">
        <p></p>
    </div>


    <div class="collapse-row">
        <div class="collapse-card">
            <button id="network4" class="collapsible-nr2" onClick="descNetworkR2(kulturhofHinteregg, this.id)">Kulturhof Hinteregg</button>
        </div>

        <div class="collapse-card">
            <button id="network5" class="collapsible-nr2" onClick="descNetworkR2(artOfMetal, this.id)">ArtOfMetal</button>
        </div>

        <div class="collapse-card">
            <button id="network6" class="collapsible-nr2" onClick="descNetworkR2(grundgut, this.id)">Grundgut</button>
        </div>
    </div>
    <div id="content-nr2" class="content">
        <p></p>
    </div>


    <h3>Rental</h3>
    <div class="collapse-row">
        <div class="collapse-card">
            <button id="rental1" class="collapsible-rr1" onClick="descRentalR1(xana, this.id)">XANA</button>
        </div>

        <div class="collapse-card">
            <button id="rental2" class="collapsible-rr1" onClick="descRentalR1(kantonBern, this.id)">Kanton Bern</button>
        </div>
    </div>
    <div id="content-rr1" class="content">
        <p></p>
    </div>


    <h3>Personalverleih</h3>
    <div class="collapse-row">
        <div class="collapse-card">
            <button id="lease1" class="collapsible-lr1" onClick="descLeaseR1(eventOn, this.id)">EventOn</button>
        </div>
    </div>
    <div id="content-lr1" class="content">
        <p></p>
    </div>



    <h3>Webauftritte</h3>
    <div class="collapse-row">
        <div class="collapse-card">
            <button id="homepage1" class="collapsible-hr1" onClick="descHomepageR1(coreMio, this.id)">Ristorante CoreMio</button>
        </div>

        <div class="collapse-card">
            <button id="homepage2" class="collapsible-hr1" onClick="descHomepageR1(savoldi, this.id)">Savoldi</button>
        </div>

    </div>
    <div id="content-hr1" class="content">
        <p></p>
    </div>


    <h3>Custom Solutions</h3>
    <div class="collapse-row">
        <div class="collapse-card">
            <button id="custom1" class="collapsible-cr1" onClick="descCustomR1(inselspitalBern, this.id)">Inselspital Bern</button>
        </div>

        <div class="collapse-card">
            <button id="custom2" class="collapsible-cr1" onClick="descCustomR1(praxisDZ, this.id)">Praxis DZ</button>
        </div>

        <div class="collapse-card">
            <button id="custom3" class="collapsible-cr1" onClick="descCustomR1(scBern, this.id)">SC Bern</button>
        </div>
    </div>
    <div id="content-cr1" class="content">
        <p></p>
    </div>

</div>


<script>
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






</script>

</body>
</html>
