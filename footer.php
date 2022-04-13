<!DOCTYPE html>
<!--
Todo: Braucht es den <head> in einem .php Element?
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="row-footer">
    <div style="margin-right: 2rem; color: black" class="col-footer">
        Dienstleistungen
        <div class="col-footer">
            <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
            <a style="color: black" href="products.php#easit">EASIT.rent</a>
            <br>
            <a style="color: black" href="products.php#programming">Entwicklung</a>
            <br>
            <a style="color: black" href="products.php#infrastructure">Infrastruktur</a>
            <br>
            <a style="color: black" href="products.php#support">Support</a>
            <br>
            <a style="color: black" href="products.php#consulting">Consulting</a>
            <br>
            <a style="color: black" href="products.php#special">Spezialprojekte</a>
        </div>
    </div>
    <div style="margin-right: 2rem; color: black" class="col-footer">
        Über TEQLY
        <div class="col-footer">
            <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
            <a style="color: black" href="contact.php">Kontakt</a>
            <br>
            <a style="color: black" href="references.php">Projekte</a>
            <br>
            <a style="color: black" href="jobs.php">Jobs</a>
            <br>
            <a style="color: black" href="https://blog.teqly.ch">Blog</a>
        </div>
    </div>
    <div style="margin-right: 2rem; color: black" class="col-footer">
        Applikationen
        <div class="col-footer">
            <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
            <a style="color: black" href="app_plattform.php">App-Plattform</a>
            <br>
            <a style="color: black" href="https://support.teqly.app">Support-Plattform</a>
            <br>
            <a style="color: black" href="#">Newsletter-Service</a>
        </div>
    </div>
</div>
<div class="row-footer">
    <div class="col-footer">
        Rechtliches
        <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
        <a style="color: black" href="imprint.php">Impressum</a>
        <br>
        <a style="color: black" href="dataprivacy.php">Datenschutzerklärung</a>
        <br>
        <a style="color: black" href="#" id="open_preferences_center">Cookie-Einstellungen</a>
        <br>
        <a style="color: black" href="agb.php">Allgemeine Geschäftsbedingungen</a>
    </div>
    <div style="margin-right: 0rem;" class="col-footer">
        Copyright
        <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
        © <?php echo date("Y"); ?> TEQLY GmbH
    </div>
    <div style="margin-right: 0rem;" class="col-footer">
        Social Media
        <div  style="border-color: black; margin-top: 0px; margin-bottom: 10px" class="linewhite"></div>
        <a href="https://www.linkedin.com/company/teqly/" class="fa fa-linkedin"></a>
        <a href="https://www.youtube.com/channel/UCdUiy-JbIqQBlVXqeVmbvrQ" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/teqly/" class="fa fa-instagram"></a>
    </div>
</div>
</div>
<div style="height: 10%"></div>
</body>
</html>
<script src="https://support.teqly.app/assets/chat/chat.min.js"></script>
<script>
    $(function() {
        new ZammadChat({
            title: 'TEST',
            background: '#111',
            fontSize: '12px',
            chatId: 1,
        });
    });
</script>