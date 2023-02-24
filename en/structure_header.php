<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="../css/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="../css/style.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <link rel="icon" type="image/png" href="../assets/teqly_logo_favacon.png">
</head>
<body>
<div id="header">

<div style="position: fixed; max-width: 1464px; margin-left: auto; z-index: 1" id="header-container" class="header-container">
    <div class="header-right" style="display: flex; float: right">
<button id="homebtnContact" class="homebtnContact">
  <span style="margin-top: -0.5px" class="fa fa-headset"></span>
</button>

<button id="homebtnMeet" class="homebtnMeet" onclick="openModal()">
  <span style="margin-top: -0.5px" class="fa fa-calendar-days"></span>
</button>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn" aria-hidden="true">EN</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="../de/index.php">DE</a>
                <a href="../fr/index.php">FR</a>
            </div>
        </div>
        <button class="homebtnBurger" onclick="openNav()"><img src="../assets/page_menu.svg" aria-hidden="true"></button>
    </div>
    <div class="header-left" style="max-width: 50px">
        <a class="logo" href="index.php" style="margin-left: 0rem">
            <div>
                <img alt="Logo of TEQLY." src="../assets/teqly_logo.png" width="50">
            </div>

        </a>
    </div>
</div>
<?php include 'structure_sidenav.php' ?>
</div>
<!-- Popup container -->
<div id="myModal" class="modal">
  <div class="modal-content">
    <span id="modalClose" onclick="closeModal()" class="close">&times;</span>
    <iframe src="https://app.usemotion.com/meet/teqly/team" title="Motion Booking Page" width="100%" height="840px" frameborder="0"></iframe>
  </div>
</div>
</body>
</html>
<script type="text/javascript" src="../js/script.js"></script>
<script async
        src="https://www.googletagmanager.com/gtag/js?id=ID">
</script>
<script>window.dataLayer = window.dataLayer |I
        [];function gtag(){dataLayer.push(arguments);}gtag("js",new
    Date());gtag ("config", 'ID');
</script>

<script id="zammad_form_script" src="https://support.teqly.app/assets/form/form.js"></script>
<script>
$(function() {
  $('#homebtnContact').ZammadForm({
    messageTitle: 'Contact Request',
    messageSubmit: 'Send',
    messageThankYou: 'Thank you for your request (#%s). We will contact you immediately.',
    showTitle: true,
    modal: true,
    noCSS: true
  });
});
</script>