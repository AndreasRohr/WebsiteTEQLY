<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="../../css/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="../../css/style.css" media="all" type="text/css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="form/form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body id="body">
<div id="mySidenav" class="sidenav">
    <div style=" max-width: 1500px"  class="sidenav-col">
        <div class="sidenav-right" style="display: flex; float: right; position: relative">
            <button style="margin-top:0.4rem; "id="navbtnContact" class="navbtnContact">Contact now!</button>
            <div class="sidenav-dropdown">
                <button onclick="myFunction2()" class="sidenav-dropbtn">EN</button>
                <div id="sidenav-myDropdown" class="sidenav-dropdown-content">
                    <a href="../de/index.php">DE</a>
                    <a href="../fr/index.php">FR</a>
                </div>
            </div>
            <button style="margin-top:0.4rem;" id="navbtnClose" class="navbtnClose"  onclick="closeNav()"><img src="../../assets/x.svg" aria-hidden="true"></button>
        </div>
        <div class="sidenav-left" style="margin-bottom: 0.1rem; width: 50px">
            <a class="logo" href="../index.php">
                <img  class="logo-white" alt="TEQLY Logo" src="../../assets/Logo_TEQLY.png"
                     width=50" height="7">
            </a>
        </div>
    </div>
    <div class="header-row">
        <div class="column-sidenav">
            <div class="linewhite"></div>
            <p id="navigation">NAVIGATION</p>
            <div class="navBlack">
                <a href="index.php">Start</a>
                <a href="tq_products.php">Services</a>
                <a href="tq_references.php">Projects</a>
                <a href="tq_contact.php">Contact</a>
                <a href="tq_app_plattform.php">App platform</a>
                <a href="tq_app_plattform.php">About TEQLY</a>
            </div>
        </div>
        <div class="column-sidenav">
            <div id="blog-line" class="linewhite"></div>
            <p class="blog-nav" id="navigation">BLOG</p>
            <div class="blog-content">
                <?php include 'structure_blog.php' ?>
            </div>
        </div>
        <div class="columnnav-2">
            <div class="linewhite"></div>
            <p id="navigation">EASIT.rent</p>
            <a style="color: white; font-size: 16px" href="https://easit.rent">Click here to go to EASIT.rent.</a>
            <p id="navigation">EASIT.rent introduction video:</p>
            <iframe src="https://www.youtube.com/embed/gTN6CIMeIag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="../../js/script.js"></script>