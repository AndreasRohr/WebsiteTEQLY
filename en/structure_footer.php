<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/normalize.css" media="all" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css" media="all" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div>
    <div id="main">
        <div class="row-footer">
            <div style="margin-right: 2rem; color: black" class="col-footer">
                Services
                <div class="col-footer">
                    <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
                    <a style="color: black" href="tq_products.php#easit">EASIT.rent</a>
                    <br>
                    <a style="color: black" href="tq_products.php#programming">Development</a>
                    <br>
                    <a style="color: black" href="tq_products.php#infrastructure">Infrastructure</a>
                    <br>
                    <a style="color: black" href="tq_products.php#support">Support</a>
                    <br>
                    <a style="color: black" href="tq_products.php#consulting">Consulting</a>
                    <br>
                    <a style="color: black" href="tq_products.php#special">Special projects</a>
                </div>
            </div>
            <div style="margin-right: 2rem; color: black" class="col-footer">
                Company
                <div class="col-footer">
                    <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
                    <a style="color: black" href="tq_about.php">About us</a>
                    <br>
                    <a style="color: black" href="tq_jobs.php">Jobs</a>
                    <br>
                    <a style="color: black" href="tq_references.php">Projects</a>
                    <br>
                    <a style="color: black" href="https://blog.teqly.ch">Blog</a>
                    <br>
                    <a style="color: black" href="tq_contact.php">Contact</a>
                    <br>
                    <a style="color: black" href="tq_press.php">Press</a>
                </div>
            </div>
            <div style="margin-right: 2rem; color: black" class="col-footer">
                Applications
                <div class="col-footer">
                    <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
                    <a style="color: black" href="tq_app_plattform.php">App platform</a>
                    <br>
                    <a style="color: black" href="https://support.teqly.app">Support platform</a>
                </div>
            </div>
        </div>
        <div class="row-footer">
            <div style="margin-right: 2rem; color: black" class="col-footer">
                Legal
                <div class="col-footer">
                    <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
                    <a style="color: black" href="legal_imprint.php">Imprint</a>
                    <br>
                    <a style="color: black" href="legal_dataprivacy.php">Privacy policy</a>
                    <br>
                    <a style="color: black" href="#" id="open_preferences_center">Cookie settings</a>
                    <br>
                    <a style="color: black" href="legal_agb.php">General terms and conditions</a>
                </div>
            </div>
            <div style="margin-right: 2rem; color: black" class="col-footer">
                Copyright
                <div class="col-footer">
                    <div style="border-color: black; margin-top: 0px" class="linewhite"></div>
                    © <?php echo date("Y"); ?> TEQLY GmbH
                </div>
            </div>
            <div style="margin-right: 2rem; color: black" class="col-footer">
                Social Media
                <div class="col-footer">
                    <div style="border-color: black; margin-top: 0px; margin-bottom: 10px" class="linewhite"></div>
                    <a href="https://www.linkedin.com/company/teqly/" class="fa fa-linkedin"></a>
                    <a href="https://www.youtube.com/channel/UCdUiy-JbIqQBlVXqeVmbvrQ" class="fa fa-youtube"></a>
                    <a href="https://www.instagram.com/teqly/" class="fa fa-instagram"></a>
                    <a href="https://open.spotify.com/show/7KG8S85T0I2XszX9QHkDB8" class="fa fa-spotify"></a>
                </div>
            </div>
        </div>
    </div>
    <div style="height: 10%"></div>
</div>
<div><br><br></div>
</body>
</html>
<script src="https://support.teqly.app/assets/chat/chat.min.js"></script>
<script>
    $(function () {
        new ZammadChat({
            title: 'Start a Chat.',
            background: '#111',
            fontSize: '12px',
            chatId: 1,
        });
    });
</script>