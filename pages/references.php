<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .collapsible1, .collapsible2 {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            height: 100px;
        }

        .active, .collapsible1:hover, .collapsible2:hover {
            background-color: #555;
        }

        .collapse-row{
            display: flex;
        }

        .collapse-card{
            width: 33%;
        }

        .content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.2s ease-out;
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
<?php include 'header.php' ?>

<div id="main" style="margin-top: 4rem">

    <h2>Unsere Referenzen</h2>

    <h3>Netzwerk & Support</h3>

    <div class="collapse-row">
        <div class="collapse-card">
            <button id="1" class="collapsible1" onClick="addDesc1(meier, this.id)">Bäckerei Meier</button>
        </div>

       <div class="collapse-card">
            <button id="2" class="collapsible1" onClick="addDesc1(lelocle, this.id)">Guesthouse Lelocle</button>
       </div>

        <div class="collapse-card">
            <button id="3" class="collapsible1" onClick="addDesc1(emma, this.id)">Emma Bed&Breakfast</button>
        </div>
    </div>
    <div id="content1" class="content">
        <p></p>
    </div>


    <div class="collapse-row">
        <div class="collapse-card">
            <button id="4" class="collapsible2" onClick="addDesc2(meier, this.id)">Bäckerei Meier</button>
        </div>

        <div class="collapse-card">
            <button id="5" class="collapsible2" onClick="addDesc2(lelocle, this.id)">Guesthouse Lelocle</button>
        </div>

        <div class="collapse-card">
            <button id="6" class="collapsible2" onClick="addDesc2(emma, this.id)">Emma Bed&Breakfast</button>
        </div>
    </div>
    <div id="content2" class="content">
        <p></p>
    </div>






</div>


<script>

    var emma = "emma";
    var meier = "meier";
    var lelocle = "lelocle";
    var text
    var btnid;
    var lastButtonPressed1;
    var lastButtonPressed2;

    function addDesc1(text, btnid){

        var content = document.getElementById("content1");

        content.innerHTML = text;

      //  document.getElementById("content1").innerHTML=text;

        var btns = document.querySelectorAll(".collapsible1");

        btns.forEach(el => {
            if(el.classList.contains("active")){
                el.classList.toggle("active");
            }
        })

        if(lastButtonPressed1 === btnid){
            content.style.maxHeight = null;
            document.getElementById(btnid).classList.toggle("active");
            lastButtonPressed1 = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
            lastButtonPressed1 = btnid;
        }

        document.getElementById(btnid).classList.toggle("active");
    }

    function addDesc2(text, btnid){

        var content = document.getElementById("content2");

        content.innerHTML=text;

        var btns = document.querySelectorAll(".collapsible2");

        btns.forEach(el => {
            if(el.classList.contains("active")){
                el.classList.toggle("active");
            }
        })

        if(lastButtonPressed2 === btnid){
            content.style.maxHeight = null;
            document.getElementById(btnid).classList.toggle("active");
            lastButtonPressed2 = null;
        }else{
            content.style.maxHeight = content.scrollHeight + "px";
            lastButtonPressed2 = btnid;
        }

        document.getElementById(btnid).classList.toggle("active");


    }

</script>

</body>
</html>
