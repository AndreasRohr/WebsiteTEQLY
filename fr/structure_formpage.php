<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PHP Contact Form With Recaptcha - reusable form</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="structure_form.js"></script>
    </head>
    <body >
        <div class="container">
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="form-container">
                <h1>
                    Que pouvons-nous faire pour vous?
                </h1>
                <form method="post" id="reused_form" >
                    <label for="name">Nom:</label>
                    <input id="name" type="text" name="Name" required maxlength="50">
                    <label for="email">Email Adresse:</label>
                    <br>
                    <input id="email" type="text" name="Email" required maxlength="50">
                    <br>
                    <label for="email">Téléphone:</label>
                    <br>
                    <input id="telefon" type="text" name="telefon" required maxlength="50">
                    <br>
                    <label for="message">Message:</label>
                    <textarea id="message" name="Message" rows="5" maxlength="6000" required></textarea>
                    <div class="g-recaptcha" data-sitekey="6LcqCakeAAAAAICQB4d18zO6clauqVFZ7CdLztUj"></div>
                    <br>
                    <button style="float: left" class="navbtnContact" type="submit" >Envoyer une demande</button>
                </form>
                <div id="success_message" style="display:none">
                    <h3>La demande de contact a été envoyée avec succès !</h3>
                    <p> Nous vous contacterons dès que possible.</p>
                </div>
                <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Oups, il y a eu un problème :( </div>
            </div>
        </div>
    </body>
</html>