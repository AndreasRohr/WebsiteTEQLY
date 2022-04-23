<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="../../css/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="../../css/style.css" media="all" type="text/css">
    <script src="form/form.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">


    <!-- Cookie Consent by TermsFeed (https://www.TermsFeed.com) -->
    <script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
    <script type="text/javascript" charset="UTF-8">
        document.addEventListener('DOMContentLoaded', function () {
            cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"de","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false});
        });
    </script>

    <!-- Google Analytics -->
    <script type="text/plain" cookie-consent="tracking" async src="https://www.googletagmanager.com/gtag/js?id=G-S58CQ1JQ8Q"></script>
    <script type="text/plain" cookie-consent="tracking">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-S58CQ1JQ8Q');
</script>
    <!-- end of Google Analytics-->

    <!-- ReCaptcha -->
    <script type="text/plain" cookie-consent="strictly-necessary" src='https://www.google.com/recaptcha/api.js'></script>
    <!-- end of ReCaptcha-->

    <!-- End Cookie Consent by TermsFeed -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="../../assets/Favicon_TEQLY.png">
</head>
<body>
<div id="header">

<div style="position: fixed; max-width: 1464px; margin-left: auto; z-index: 1" id="header-container" class="header-container">
    <div class="header-right" style="display: flex; float: right">
        <button id="homebtnContact" class="homebtnContact">Jetzt kontaktieren!</button>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn" aria-hidden="true">DE</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="../../en/">EN</a>
                <a href="#">FR</a>
            </div>
        </div>
        <button class="homebtnBurger" onclick="openNav()"><img src="../../assets/menu.svg" aria-hidden="true"></button>
    </div>
    <div class="header-left" style="max-width: 50px">
        <a class="logo" href="../index.php" style="margin-left: 0rem">
<!--
            <div>
            <img alt="TEQLY" src="assets/schriftzug_vertikal.png"
                 width=50" height="7">
            </div>
            -->
            <div>
                <img src="../../assets/Logo_TEQLY.png" width="50">
            </div>

        </a>
    </div>
</div>
<?php include 'sidenav.php' ?>
<div id="myModal" class="popupform">
    <div class="popupform-content">
        <span class="close">&times;</span>
        <?php include 'form/formpage.php' ?>
    </div>
</div>
</div>
</body>
</html>
<script type="text/javascript" src="../../js/script.js"></script>
<script async
        src="https://www.googletagmanager.com/gtag/js?id=ID">
</script>
<script>window.dataLayer = window.dataLayer |I
        [];function gtag(){dataLayer.push(arguments);}gtag("js",new
    Date());gtag ("config", "ID'); </script>