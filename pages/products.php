<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEQLY Produkte & Services</title>
    <style>
        .lg-text-center {
            text-align: center;
            font-size: 40px;
            font-weight: bold;
        }

        .lg-text {
            font-size: 40px;
            font-weight: bold;
        }


        .md-text-center {
            text-align: center;
            font-size: 25px;
            opacity: 80%;
        }

        .md-text {
            font-size: 25px;
            opacity: 80%;
        }

        .picture{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 70%;
        }


        br{
            display: block; /* makes it have a width */
            content: ""; /* clears default height */
            margin-top: 0px; /* change this to whatever height you want it */
        }



    </style>
</head>
<body>
<?php include 'header.php' ?>

<div id="main" style="margin-top: 4rem">
    <p class="lg-text-center">
        Offenheit <br>
        Innovation <br>
        Transparenz <br>
    </p>

    <p class="md-text-center">
        Das sind die Grundwerte, die wir bei TEQLY leben: <br>
        Wir sind jederzeit offen für Neues, sind immer "Up-To-Date". <br>
        Unsere Kunden werden transparent und offen beraten, die Bedürfnisse des Kunden werden eruiert und evaluiert.<br>
        In unserem Schaffen, sowie in der Preisgestaltung sind wir immer fair und transparent.<br>

    </p>
    <figure class="picture">
        <img src="../assets/teqly_team.jpeg">
        <figcaption>v.l.n.r.: Jannik Frei, Sandro Bütler, Andreas Rohr</figcaption>
    </figure>

    <p class="lg-text"> Unser Team</p>
    <p class="md-text">Wir sind ein junges dynamisches Team, dass sich mit TEQLY selbstständig gemacht hat. Als Alternative zu konventionellen IT-Dienstleistern sind wir in den Markt gestartet und konnten bereits erste Erfolge verbuchen.</p>



    <div class="emp">
        <p class="md-text" style="font-weight: bold">Jannik Frei</p>
        <div class="emp-contact">
            <button onclick="window.location.href = 'mailto:jannik@teqly.ch';">
                E -Mail<br>
                jannik@teqly.ch
            </button>
            <button onclick="window.location.href = 'tel:+41565111131';">
                Telefon<br>
                056 511 11 31
            </button>
        </div>
    </div>


    <div class="emp">
        <p class="md-text" style="font-weight: bold">Sandro Bütler</p>
        <div class="emp-contact">
            <button onclick="window.location.href = 'mailto:sandro@teqly.ch';">
                E -Mail<br>
                sandro@teqly.ch
            </button>
            <button onclick="window.location.href = 'tel:+41565111130';">
                Telefon<br>
                056 511 11 30
            </button>
        </div>
    </div>


    <div class="emp">
        <p class="md-text" style="font-weight: bold">Andreas Rohr</p>
        <div class="emp-contact">
            <button onclick="window.location.href = 'mailto:andreas@teqly.ch';">
                E -Mail<br>
                andreas@teqly.ch
            </button>
            <button onclick="window.location.href = 'tel:+41565111132';">
                Telefon<br>
                056 511 11 32
            </button>
        </div>
    </div>
</div>
<script>

</script>

</body>
</html>
