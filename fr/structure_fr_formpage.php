<?php include_once 'structure_fr_sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>PHP Contact Form with Google reCAPTCHA V2 by CodeAT21</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Stylesheet file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google recaptcha API library -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="contact__form">
    <div class="container">
        <div class="wrapper">
            <div class="form__inner">
                <form action="" method="post" class="form">
                    <h3>Contactez maintenant:</h3>
                    <!-- Status message -->
                    <?php if(!empty($statusMsg)){ ?>
                        <div class="status__msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
                    <?php } ?>

                    <!-- Form fields -->
                    <div class="form__input">
                        <label for="name">Nom</label>
                        <input type="text" name="name" placeholder="Saisissez votre nom" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required>
                    </div>
                    <div class="form__input">
                        <label for="email">E-Mail</label>
                        <input type="text" name="email" placeholder="Saisissez votre e-mail" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                    </div>
                    <div class="form__input">
                        <label for="subject">Sujet</label>
                        <input type="text" name="subject" placeholder="Saisissez le sujet" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required>
                    </div>
                    <div class="form__input">
                        <label for="message">Message</label>
                        <textarea name="message" placeholder="Saisissez votre message ici" required><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                    </div>
                    <div class="form__input">
                        <!-- Google reCAPTCHA box -->
                        <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                    </div>
                    <br>
                    <input type="submit" name="submit" class="btn" value="Envoyer la demande!">
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>