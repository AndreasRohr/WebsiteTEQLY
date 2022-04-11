<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'header_imports.php' ?>
    <!--EDIT HERE-->
    <title>References</title>
    <?php include 'header.php' ?>
</head>
<body>

<div id="main" style="margin-top: 7rem">
    <div class="title-row">
        <div class="title-left">
            <div class="typewriter">
                <!--EDIT HERE-->
                <h2 class="references-category">KATEGORIE</h2>
                <!--EDIT HERE-->
                <h1  class="indextitle">TITEL</h1>
            </div>
        </div>
    </div>
    <div class="index-container" style="margin-top: 4rem">
        <img src="/Website/assets/start.jpg">
        <div  class="title-right">
            <!--EDIT HERE-->
            <h2>UNTERTITEL-TITEL<br>UNTERTITLE-TEXT</h2>
        </div>
        <div class="lineblack-index"></div>
        <div class="header-row"style="grid-template-columns: repeat(2,auto);">
        <div class="index-col-left" style="max-width: 20rem;white-space: normal">
            <!--EDIT HERE-->
            <h2>ANSCHRIFT <br>STRASSE NR <br>PLZ ORT <br> KANTON LAND</h2>
        </div>
        <div class="index-col-right" style="width: 80%">
            <!--EDIT HERE-->
            <p>Beschreibung asdsadasd as dgsadg sad agszd asg zuags zgaszd gsazd zaszd gsazdg zzgsa gzasg dgaszd sazg zas gasg gag sagdsadg zasgas gsazg uzas gzsag zagsz gsaud gas gdas gazdg as asd sad sad asdas ad sad sadsadas dsadsadsa daadsasd asdsadasdsadad  as as asd sad sad asdsa dsadsad sadsad sad sa dasd asdsad asdas ddsaud</p>
        </div>
        </div>
    </div>
</div>
<br>
<?php include 'footer.php' ?>
</body>
</html>
<script type="text/javascript" src="/Website/script.js"></script>
<script>
    // Random String return for index.php
    var items = Array("Ihre IT-Partner.", "Ihre Problemlöser.", "Ihre Supporter.", "Ihre Programmierer.", "Ihre IT-Berater.", "Ihre Digitalisierer.");

    window.onload = function answerWriter() {
        document.getElementById("titleh1").innerHTML = randString();
    }
    function randString() {
        var item = items[Math.floor(Math.random() * items.length)];
        return item;
    }
</script>

