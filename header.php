<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<div id="header">
<!-- Cookie Consent by TermsFeed (https://www.TermsFeed.com) -->
<script type="text/javascript" src="https://www.termsfeed.com/public/cookie-consent/4.0.0/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
    document.addEventListener('DOMContentLoaded', function () {
        cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"de","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false});
    });
</script>

<noscript>ePrivacy and GPDR Cookie Consent by <a href="https://www.TermsFeed.com/" rel="nofollow">TermsFeed Generator</a></noscript>
<!-- End Cookie Consent by TermsFeed (https://www.TermsFeed.com) -->
<div style="position: fixed; max-width: 1464px; margin-left: auto; z-index: 1" id="header-container" class="header-container">
    <div class="header-right" style="display: flex; float: right">
        <button id="homebtnContact" class="homebtnContact">Jetzt kontaktieren!</button>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn" aria-hidden="true">DE</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#">EN</a>
                <a href="#">FR</a>
            </div>
        </div>
        <button class="homebtnBurger" onclick="openNav()"><img src="assets/menu.svg" aria-hidden="true"></button>
    </div>
    <div class="header-left">
        <a class="logo" href="index.php" style="margin-left: 0rem">
            <img alt="TEQLY" src="assets/schriftzug_vertikal.png"
                 width=50" height="7">
        </a>
    </div>
</div>
<?php include 'sidenav.php' ?>
<div id="myModal" class="popupform">
    <div class="popupform-content">
        <span class="close">&times;</span>
        <?php include 'formpage.php' ?>
    </div>
</div>
</div>
</body>
</html>
<script type="text/javascript" src="script.js"></script>
<script async
        src="https://www.googletagmanager.com/gtag/js?id=ID">
</script>
<script>window.dataLayer = window.dataLayer |I
        [];function gtag(){dataLayer.push(arguments);}gtag("js",new
    Date());gtag ("config", "ID'); </script>