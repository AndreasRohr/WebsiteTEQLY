<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="/Website/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="/Website/style.css" media="all" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
<div id="mySidenav" class="sidenav">
    <div style=" max-width: 1464px"  class="sidenav-col">
        <div class="sidenav-right" style="display: flex; float: right; position: relative">
            <button style="margin-top:0.4rem; "id="navbtnContact" class="navbtnContact">Jetzt kontaktieren!</button>
            <div class="sidenav-dropdown">
                <button onclick="myFunction2()" class="sidenav-dropbtn">DE</button>
                <div id="sidenav-myDropdown" class="sidenav-dropdown-content">
                    <a href="#">FR</a>
                </div>
            </div>
            <button style="margin-top:0.4rem;" class="navbtnClose"  onclick="closeNav()"><img src="/Website/assets/x.svg" aria-hidden="true"></button>
        </div>
        <div class="sidenav-left" style="margin-bottom: 0.1rem; width: 50px">
            <a class="logo" href="/Website/pages/index.php">
                <img class="logo-white" alt="TEQLY" src="/Website/assets/Logo.png"
                     width=50" height="7">
            </a>
        </div>
    </div>
    <div class="header-row">
        <div class="column-sidenav">
            <div class="linewhite"></div>
            <p id="navigation">NAVIGATION</p>
            <div class="navBlack">
                <a href="/Website/pages/index.php">Start</a>
                <a href="/Website/pages/products.php">Produkte & Services</a>
                <a href="/Website/pages/references.php">Referenzen</a>
                <a href="/Website/pages/team.php">Team</a>
                <a href="#">Kontakt</a>
            </div>
        </div>
        <div class="column-sidenav">
            <div class="linewhite"></div>
            <p id="navigation">BLOG</p>
            <div class="blog-content">
                <?php include 'blog.php' ?>
            </div>
        </div>
        <div class="columnnav-2">
            <div class="linewhite"></div>
            <p id="navigation">RENTAL</p>
            <a style="color: white; font-size: 16px" href="https://www.rental.teqly.ch">Hier klicken um auf TEQLY | Rental zu gelangen.</a>
            <p id="navigation">TEQLY | Rental Vorstellungsvideo:</p>
            <iframe src="https://www.youtube.com/embed/gTN6CIMeIag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/Website/script.js"></script>