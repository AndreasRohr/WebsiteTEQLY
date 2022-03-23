<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .collapsible {
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

        .active, .collapsible:hover {
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

<h2>Unsere Referenzen</h2>

<h3>Netzwerk & Support</h3>

<div class="collapse-row">
    <div class="collapse-card">
        <button id="1" class="collapsible">Bäckerei Meier</button>
    </div>

    <div class="collapse-card">
        <button id="2" class="collapsible">Guesthouse Lelocle</button>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <div class="collapse-card">
        <button id="3" class="collapsible">Emma Bed&Breakfast</button>
        <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
</div>
<div id="content" class="content"></div>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    var emma = "emma";
    var meier = "meier";
    var lelocle = "lelocle";


    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = document.getElementById("content");

            switch (this.id) {
                case "1":
                    content.innerHTML = meier;

                    if(document.getElementById("1").classList.contains("active")){
                        content.style.maxHeight = content.scrollHeight + "px";
                    }else{
                        content.style.maxHeight = null;
                    }

                    if(document.getElementById("2").classList.contains("active")){
                        document.getElementById("2").classList.toggle("active");
                    }
                    if(document.getElementById("3").classList.contains("active")){
                        document.getElementById("3").classList.toggle("active");
                    }

                    break;
                case "2":
                    content.innerHTML = lelocle;

                    if(document.getElementById("2").classList.contains("active")){
                        content.style.maxHeight = content.scrollHeight + "px";
                    }else{
                        content.style.maxHeight = null;
                    }

                    if(document.getElementById("1").classList.contains("active")){
                        document.getElementById("1").classList.toggle("active");
                    }
                    if(document.getElementById("3").classList.contains("active")){
                        document.getElementById("3").classList.toggle("active");
                    }

                    break;
                case "3":
                    content.innerHTML = emma;
                    if(document.getElementById("3").classList.contains("active")){
                        content.style.maxHeight = content.scrollHeight + "px";
                    }else{
                        content.style.maxHeight = null;
                    }

                    if(document.getElementById("1").classList.contains("active")){
                        document.getElementById("1").classList.toggle("active");
                    }
                    if(document.getElementById("2").classList.contains("active")){
                        document.getElementById("2").classList.toggle("active");
                    }

                    break;
                default:
                    break;
            }

        });
    }
</script>

</body>
</html>
