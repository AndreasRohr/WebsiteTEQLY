<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Navigation</title>
<?php include 'structure_header_imports.php' ?>
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body id="body">
<div id="mySidenav" class="sidenav">
    <div style=" max-width: 1500px"  class="sidenav-col">
        <div class="sidenav-right" style="display: flex; float: right; position: relative">
            <button style="margin-top:0.4rem; "id="navbtnContact" class="navbtnContact">
            <span style="margin-top: -0.5px" class="fa fa-headset"></span>
            </button>
            <button style="margin-top:0.4rem;" id="navbtnContact" class="navbtnMeet" onclick="openModal()">
            <span style="margin-top: -0.5px" class="fa fa-calendar"></span>
            </button>
            <div class="sidenav-dropdown">
                <button onclick="myFunction2()" class="sidenav-dropbtn">DE</button>
                <div id="sidenav-myDropdown" class="sidenav-dropdown-content">
                    <a href="../en/index.php">EN</a>
                    <a href="../fr/index.php">FR</a>
                </div>
            </div>
            <button style="margin-top:0.4rem;" id="navbtnClose" class="navbtnClose"  onclick="closeNav()"><img src="../assets/page_x.svg" aria-hidden="true"></button>
        </div>
        <div class="sidenav-left" style="margin-bottom: 0.1rem; width: 50px">
            <a class="logo" href="../index.php">
                <img style="max-height: 50px" class="logo-white" alt="TEQLY" src="../assets/teqly_logo.png"
                     width="50" height="7">
            </a>
        </div>
    </div>
    <div class="header-row">
        <div class="column-sidenav">
            <div class="linewhite"></div>
            <p id="navigation">NAVIGATION</p>
            <div class="navBlack">
                <a href="index.php">Start</a>
                <a href="tq_products.php">Dienstleistungen</a>
                <a href="tq_references.php">Projekte</a>
                <a href="tq_contact.php">Kontakt</a>
                <a href="tq_blog_overview.php">Blog</a>
                <a href="tq_about.php">Über TEQLY</a>
                <br>
                <br>

            </div>
        </div>
         <div class="column-sidenav">
                    <div class="linewhite"></div>
                    <p id="navigation">APPLIKATIONEN & DOWNLOADS</p>
                    <div class="navBlack">
                        <a href="tq_app_plattform.php">App-Plattform</a>
                        <a href="https://support.teqly.app">Support</a>
                        <a href="https://newsletter.teqly.app/customer/index.php/guest/index">Newsletter</a>
                        <a href="tq_remote_app.php">Remote Client</a>
                         <br>
                         <br>
                    </div>
                </div>
        <div class="column-sidenav">
            <div class="linewhite"></div>
            <p id="navigation">EASIT.rent</p>
            <a style="color: white; font-size: 16px" href="https://easit.rent">Hier klicken um auf EASIT.rent zu gelangen.</a>
                <br>
                <a href="https://easit.rent" style="margin-bottom: 9rem;">
                  <img class="logo-white" style="max-height: 250px;" alt="TEQLY" src="../assets/easit_logo.png">
                </a>
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="../js/script.js"></script>
<script id="zammad_form_script" src="https://support.teqly.app/assets/form/form.js"></script>
<script>
$(function() {
  $('#navbtnContact').ZammadForm({
    messageTitle: 'Kontaktanfrage',
    messageSubmit: 'Senden',
    messageThankYou: 'Vielen Dank für Ihre Anfrage (#%s). Wir melden uns umgehend.',
    showTitle: true,
    modal: true,
    noCSS: true
  });
});
</script>