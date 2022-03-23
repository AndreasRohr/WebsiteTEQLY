<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Referenzen</title>
    <link rel="stylesheet" href="/Website/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="/Website/style.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
<?php include 'header.php' ?>
<h2>Unsere Referenzen</h2>
<h3>Netzwerk & Support</h3>

<div class="collapse-row">
    <div class="collapse-card" style="min-width: 33%; display: block">
        <button href="#demo1" class="collapsible" data-toggle="collapse">Bäckerei Meier</button>
    </div>
    <div class="collapse-card" style="min-width: 33%; display: block">
        <button href="#demo2" class="collapsible" data-toggle="collapse">Vinesch</button>
    </div>
    <div class="collapse-card" style="min-width: 33%; display: block">
        <button href="#demo3" class="collapsible" data-toggle="collapse">Inselspital</button>
    </div>
</div>
<div id="demo1" class="collapse">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
</div>
<div id="demo2" class="collapse">
   TEST
</div>
<div id="demo3" class="collapse">
   TEST 2
</div>


</body>
</html>
<script>$('.collapsible').on('click',function(){$('.collapse').collapse('hide');})</script>


