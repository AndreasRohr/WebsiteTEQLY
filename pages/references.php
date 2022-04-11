<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Website/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="/Website/style.css" media="all" type="text/css">
    <title>Startseite</title>
</head>

<body>
<?php include 'header.php' ?>
<div id="main" style="margin-top: 6rem">
    <ul class="grid">
        <li>
            <p>1</p>
        </li>
        <li>
            <p>2</p>
            <button type="button" data-quick-view>Quick view</button>
        </li>
        <li class="fullwidth is-hidden" id="quickview-01">
            <button type="button" data-close>Close 2</button>
            <p>fullwidth 2</p>
            <p>This grid item needs to stretch the full width of the page, and force other grid items to reflow around it, whilst remaining "visually connected" to the preceeding grid item.</p>
            <p>Test <a href="#">inline link</a>.</p>
        </li>
        <li>
            <p>3</p>
        </li>
        <li>
            <p>4</p>
            <button type="button" data-quick-view>Quick view</button>
        </li>
        <li class="fullwidth is-hidden" id="quickview-04">
            <button type="button" data-close>Close 4</button>
            <p>fullwidth 4</p>
            <p>This grid item needs to stretch the full width of the page, and force other grid items to reflow around it, whilst remaining "visually connected" to the preceeding grid item.</p>
            <p>Test <a href="#">inline link</a>.</p>
        </li>
        <li>
            <p>5</p>
            <button type="button" data-quick-view>Quick view</button>
        </li>
        <li class="fullwidth is-hidden" id="quickview-05">
            <button type="button" data-close>Close 5</button>
            <p>fullwidth 5</p>
            <p>This grid item needs to stretch the full width of the page, and force other grid items to reflow around it, whilst remaining "visually connected" to the preceeding grid item.</p>
            <p>Test <a href="#">inline link</a>.</p>
        </li>
        <li>
            <p>6</p>
        </li>
        <li>
            <p>7</p>
        </li>
        <li>
            <p>8</p>
        </li>
    </ul>
<?php include 'footer.php' ?>
</body>
</html>
<script type="text/javascript" src="/Website/script2.js"></script>
