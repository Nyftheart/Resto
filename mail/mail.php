<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Contact</title>
</head>

<body>

    <h1>la poste</h1>
    <form method="post">
        <label>Nom</label>
        <input type="text" name="nom" required>
        <label>Email</label>
        <input type="email" name="email" required>
        <label>Message</label>
        <textarea name="message" required></textarea>
        <input type="submit">
    </form>
    <?php
    ini_set("SMTP", "gmail-smtp-in.l.google.com");
    ini_set("smtp_port", 25);//tester avec 465
    ini_set("sendmail_from","yannhenno2@gmail.com");
    

    if(isset($_POST['message'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'From: ' . $_POST['email'] . "\r\n";

        $message = '<h1>COMMANDE JUSTEATS</h1>
        <p><b>Nom : </b>' . $_POST['nom'] . '<br>
        <b>Email : </b>' . $_POST['email'] . '<br>
        <b>Message : </b>' . $_POST['message'] . '</p>';

        $retour = mail('' . $_POST['email'] . '', 'Voici votre commande Food Funday', $message, $entete);
        if($retour) {
            echo '<p>Votre message a bien été envoyé.</p>';
        }
    }
    ?>
</body>
</html>