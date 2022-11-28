<?php
require_once 'connection.php';

$users = $db->query("SELECT * FROM users");
$sav = $db->prepare("INSERT INTO users(names, passwords, mails) VALUES(:pseudo, :mdp, :mail)");

$this_user = $db->prepare("");

if (isset($_POST["envoie"])) {
    $name = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $email = $_POST['mail'];

    $result_mail = $db->query("SELECT * FROM users WHERE mails='".$email."'");
    $num_rows_mail = $result_mail->rowCount();

    $result_name = $db->query("SELECT * FROM users WHERE names='".$name."'");
    $num_rows_name = $result_name->rowCount();
    
    if ($name!="" and $num_rows_name==0) {
        print "Pseudonyme non utilisé !"."<br/>";
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ($email!="" and $num_rows_mail==0) {
                print "Mail non utilisé !"."<br/>";
                if (strlen($mdp) >= 6) {
                    print "Mot de passe correct !"."<br/>";
                    if ($_POST["vmdp"]==$mdp) {
                    print "Vérification du mot de passe réussie !"."<br/>";
    
                    // Opérations après vérifications !
                    $result_id = $db->query("SELECT ids FROM users WHERE mails='".$email."'");
                    $num_rows_id = $result_id->rowCount();
    
                    $result_username = $db->query("SELECT names FROM users WHERE mails='".$email."'");
                    $num_rows_username = $result_username->rowCount();
    
                    $sav->execute([
                        'pseudo' => $name,
                        'mdp' => $mdp,
                        'mail' => $email,
                    ]);
                    } else {
                        print "Le mot de passe doit comporter au moins 6 caractères !"."<br/>";
                    }
                } else {
                     print "Vérification du mot de passe échouée !"."<br/>";
                }
            } elseif ($email!="" and $num_rows_mail>=1) {
                 print "Mail déjà utilisé !"."<br/>";
            }
        } else {
            print "Le format de votre mail est incorrect !";
        }
    } elseif ($name!="" and $num_rows_name!=0) {
         print "Pseudo non disponible !"."<br/>";
    };
    error_reporting(E_ERROR | E_PARSE);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/83ac43579f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/register.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <form method="post">
                <span>Register</span>
                <input class="inputtext" type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required>
                <input class="inputtext" type="text" name="mail" id="mail" placeholder="Votre Adresse Mail" required>
                <input class="inputtext" type="text" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
                <input class="inputtext" type="text" name="vmdp" id="vmdp" placeholder="Confirmez votre mot de passe" required>
                <input class="inputcheckbox" type="checkbox" required>
                <label class="inputcheckbox" for="CGU">J'accepte les conditions générales d'utilisations.</label>
                <input class="inputsubmit" type="submit" value="Inscription" name="envoie" id="envoie">
                <span class="connexion">Déjà un compte ? <a href="./login.php">Connectez-vous !</a></span>
            </form>


        </div>
        

    </main>
    
</body>
</html>