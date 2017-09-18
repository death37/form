<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <title></title>
</head>
<body>
    <h1>Votre message est bien enregistré :</h1><br>
<div class="reponse">    
<?php    // variable define
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $choice = $_POST['choice'];
        $message = $_POST['message'];

        //message a l'atention du visiteur qui confirme l'envoi son message
        echo "Votre Nom : " . $firstname . "<br>";
        echo "Votre Prénom : " . $lastname . "<br>";
        echo "Votre adresse mail : " . $email . "<br>";
        echo "Votre téléphone: " . $phone . "<br>";
        echo "Votre choix : " . $choice . "<br>";
        echo "Votre message : " . $message . "<br>";
        echo "Merci";
?>
</div>        
</body>
</html>