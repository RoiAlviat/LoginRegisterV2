<?php
include './serveur/connection.php';
global $db;

$users = $db->query("SELECT * FROM users");

$sav = $db->prepare("INSERT INTO users(names, passwords, mails) VALUES(:pseudo, :mdp, :mail)");

while ($user = $users->fetch()) { // Test require
    echo "ID : ".$user["ids"]."<br/>";
    echo "Pseudo : ".$user["names"]."<br/>";
    echo "Mot de passe : ".$user["passwords"]."<br/>";
    echo "Adresse Mail : ".$user["mails"]."<br/>";
    echo "Date d'inscription : ".$user["dates"]."<br/>"."<br/>";
}

if (isset($_POST["envoie"])) {
    $name = $_POST['pseudo'];
    $mdp = $_POST['mdp'];
    $email = $_POST['mail'];

    $result_mail = $db->query("SELECT * FROM users where mails='".$email."'");
    $num_rows_mail = $result_mail->rowCount();

    $result_name = $db->query("SELECT * FROM users where names='".$name."'");
    $num_rows_name = $result_name->rowCount();
    
    if ($name!="" and $num_rows_name==0) {
        echo "Pseudonyme non utilisé !"."<br/>";
        if ($email!="" and $num_rows_mail==0) {
            echo "Mail non utilisé !"."<br/>";
            if ($_POST["vmdp"]==$mdp) {
                echo "Vérification du mot de passe réussie !"."<br/>";

                // Opérations après vérifications :
                $sav->execute([
                    'pseudo' => $name,
                    'mdp' => $mdp,
                    'mail' => $email,
                ]);
            } else {
                echo "Vérification du mot de passe échouée !"."<br/>";
            }
        } elseif ($email!="" and $num_rows_mail>=1) {
            echo "Mail déjà utilisé !"."<br/>";
        }
    } elseif ($name!="" and $num_rows_name!=0) {
        echo "Pseudo non disponible !"."<br/>";
    };
    error_reporting(E_ERROR | E_PARSE);
}
?>


<form method="post">
    <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo" required>
    <input type="text" name="mail" id="mail" placeholder="Votre adresse mail" required>
    <input type="text" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
    <input type="text" name="vmdp" id="vmdp" placeholder="Vérifier mot de passe" required>
    <input type="submit" name="envoie" id="envoie">
</form>
