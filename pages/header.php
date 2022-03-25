<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title</title>
    <link rel="stylesheet" href="/Website/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="/Website/style.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<?php include 'sidenav.php' ?>

<div style="position: fixed; max-width: 1500px" id="header-container" class="header-container">
    <div style="float: right" class="header-col">
        <button class="homebtnBurger"  onclick="openNav()">
            <img src="/Website/assets/menu.svg" aria-hidden="true">
        </button>
        <button id="homebtnContact" class="homebtnContact" ">Jetzt kontaktieren!</button>
    </div>
    <div class="header-col">
        <h1 class="Logo">TQ</h1>
    </div>
</div>

<div id="myModal" class="popupform">
    <div class="popupform-content">
        <span class="close">&times;</span>
        <?php include 'formpage.php' ?>
    </div>

</div>
</body>
</html>
<script type="text/javascript" src="/Website/script.js"></script>
