<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="css/style.css" media="all" type="text/css">
    <title>TEQLY Visitenkarte</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            text-align: center;
            width: 80%;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .containerCard {
            padding-top: 1rem;
            padding-bottom: 2rem;

        }
    </style>
</head>
<body>
<div id="main">
    <div class="three-col" style="margin-left: 3rem;margin-right: auto">
        <div class="three-col-block">
            <div class="card">
                <div class="containerCard">
                    <h1>Office</h1>
                    <br>
                    <a style="color: black" href="mailto:info@teqly.ch">info@teqly.ch</a>
                    <p>056 511 11 33</p>
                    <a style="color: black; font-weight: bolder" href="assets/vcard_bureau.vcf"
                       download="vcard_bureau.vcf">Kontaktdaten speichern</a>
                </div>
            </div>
        </div>
        <div class="three-col-block" >
        <div class="card">
            <div class="containerCard">
                <h1>Support</h1>
                <br>
                <a style="color: black" href="mailto:support@teqly.app">support@teqly.app</a>
                <p>056 511 11 33</p>
                <a style="color: black; font-weight: bolder; " href="assets/vcard_support.vcf"
                   download="vcard_support.vcf">Kontaktdaten speichern</a>
            </div>
        </div>
    </div>
    <div class="three-col" style="margin-right: auto">
        <div class="three-col-block">
            <div class="card">
                <div class="containerCard">
            <h1>Sandro Bütler</h1>
            <br>
            <a style="color: black" href="mailto:sandro@teqly.ch">sandro@teqly.ch</a>
            <p>056 511 11 30</p>
            <a style="color: black; font-weight: bolder" href="assets/vcard_sandro.vcf"
               download="vcard_sandro.vcf">Kontaktdaten speichern</a>
        </div>
            </div>
        </div>
        <div class="three-col-block">
            <div class="card">
                <div class="containerCard">
            <h1>Jannik Frei</h1>
            <br>
            <a style="color: black" href="mailto:jannik@teqly.ch">jannik@teqly.ch</a>
            <p>056 511 11 31</p>
            <a style="color: black; font-weight: bolder" href="assets/vcard_jannik.vcf"
               download="vcard_jannik.vcf">Kontaktdaten speichern</a>
        </div>
            </div>
        </div>
        <div class="three-col-block" style="margin-bottom: 3rem">
            <div class="card">
                <div class="containerCard">
            <h1>Andreas Rohr</h1>
            <br>
            <a style="color: black" href="mailto:andreas@teqly.ch">andreas@teqly.ch</a>
            <p>056 511 11 32</p>
            <a style="color: black; font-weight: bolder" href="assets/vcard_andreas.vcf"
               download="vcard_andreas.vcf">Kontaktdaten speichern</a>
        </div>
            </div>
        </div>
    </div>
    </div>
</div>
</div>
</body>
</html>
