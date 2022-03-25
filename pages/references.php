<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Website/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="/Website/style.css" media="all" type="text/css">
    <title>Startseite</title>
</head>

<body>
<?php include 'header.php' ?>
<div id="main" style="margin-top: 6rem">
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
<br>
<?php include 'footer.php' ?>
</body>
</html>
<script type="text/javascript" src="/Website/script2.js"></script>
