<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>

<body>
<?php
if ($_POST)
    {

    //not empty
    //atleast 6 character long

    $errors = array();

    //start validation

    if(empty($_POST['firstname']))
        {
        $errors['firstname1'] = "Votre Nom ne peut pas être vide";

        }

    if(empty($_POST['lastname']))
        {
        $errors['lastname1'] = "Votre Prénom ne peut pas être vide";

        }

    if(empty($_POST['email']))
        {
        $errors['email1'] = "Votre mail ne peut pas être vide";

        }
    if(empty($_POST['message']))
        {
        $errors['message1'] = "Votre message ne peut pas être vide";

        }
    if(empty($_POST['choice']))
        {
        $errors['choice1'] = "Votre message ne peut pas être vide";

        }
    if(strlen($_POST['phone']) < 10)
        {
        $errors['phone1'] = "Ne peut pas contenir plus de 10 chiffres";

        }
    if(empty($_POST['phone']))
        {
        $errors['phone2'] = "Votre message ne peut pas être vide";

        }

        // count error redirect success page
    if(count($errors) == 0)
        {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $choice = $_POST['choice'];
            $message = $_POST['message'];
    
            //message a l'atention du visiteur qui confirme l'envoi son message
            echo "Votre Nom : " . $lastname . "<br>";
            echo "Votre Prénom : " . $firstname . "<br>";
            echo "Votre adresse mail : " . $email . "<br>";
            echo "Votre téléphone: " . $phone . "<br>";
            echo "Votre choix : " . $choice . "<br>";
            echo "Votre message : " . $message . "<br>";
            echo "Merci";
            
        }  
    }
?>
<header>
<h1>Formulaire de contact</h1>
</header>
<div class="reponse">
<form method="post" action="" target="">
  <div>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="lastname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>" />
    <p><?php if(isset($errors['firstname1'])) echo $errors['firstname1'];  ?></p>
  </div>

  <div>
  <label for="prenom">Prénom :</label>
  <input type="text" id="prenom" name="firstname" value="<?php if(isset($_POST['lastname'])) echo $_POST['lastname']; ?>" />
    <p><?php if(isset($errors['lastname1'])) echo $errors['lastname1'];  ?></p>
  </div>

  <div>
    <label for="courriel">Courriel :</label>
    <input type="email" id="courriel" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" />
    <p><?php if(isset($errors['email1'])) echo $errors['email1'];  ?></p>
  </div>

  <div>
    <label for="tel">Téléphone :</label>
    <input type="number" name="phone" value="<?php if(isset($_POST['phone'])) echo $_POST['phone']; ?>" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$">
    <p><?php if(isset($errors['phone1'])) echo $errors['phone1'];  ?></p>
    <p><?php if(isset($errors['phone2'])) echo $errors['phone2'];  ?></p>
  </div>

  <div>
    <label for="choice">Votre choix :</label>
        <select name="choice"> 
            <option value="Rappel">Vous souhaiter être rappeler</option>
            <option value="Message">Message important</option>
            <option value="Mécontent">Mécontent</option>
        </select>
    </div>


  <div>
    <label for="message">Message :</label>
    <textarea id="messa" name="message" value="<?php if(isset($_POST['message'])) echo $_POST['message']; ?>"></textarea>
    <p><?php if(isset($errors['message1'])) echo $errors['message1'];  ?></p>
  </div>
 
  <div class="button">
    <button type="submit">Envoyer votre message</button>
  </div>

</form>
</body>
</html>
