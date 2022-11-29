<?php
    require_once 'db.php';

    session_start();
    
    if (isset($_SESSION["user_login"])) {
        header('location: connected.php');
    }
    if (isset($_REQUEST["envoie"])) {
        $email = $_REQUEST["mail"];
        $password = $_REQUEST["mdp"];

        if (empty($email)) {
            print "Mail vide !";
        } elseif (empty($password)) {
            print "Mot de passe vide !";
        } else {
            try {
                $select_stmt = $db->prepare('SELECT * FROM users WHERE mails = :umail');
            
                $select_stmt->execute(array(':umail'=>$email));
                $row = $select_stmt->fetch(PDO::FETCH_ASSOC);

                if ($select_stmt->rowCount() > 0) {
                    if ($email==$row["mails"]) {
                        if ($password == $row["passwords"]) {
                            $_SESSION["user_login"] = $row["ids"];
                            header('location: connected.php');
                        } else {
                            print "Mot de passe incorrect !";
                        }
                    } else {
                        print "Adresse mail incorrecte !";
                    }
                }
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Raleway:ital,wght@0,200;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/83ac43579f.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connexion.css">
    
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
        <img src="./css/img/pizzalogo.png" alt="">
        </div>
        <nav>

            <a href=""><div class="connexion">Connexion </div></a>

            <a href="./index.php"><div class="accueil">Accueil</div></a>

            <a href=""><div class="Commandez">Commandez</div></a>

            <a href=""><div class="contacthoraire">Contact & Horaires </div></a>
            
            <a href=""><div class="mentionlegales">Mentions Légales</div></a>

        </nav>
    </header>

    <main>
        <div class="container">
            <form method="post">
                <span>Connexion</span>
                <input class="inputtext" type="email" name="mail" id="mail" placeholder="&#xf007 Votre adresse mail" required>
                <input class="inputtext" type="password" name="mdp" id="mdp" placeholder="&#xf084 Votre mot de passe" required>
                <input class="inputsubmit" value="Connexion" type="submit" name="envoie" id="envoie">
                <span class="inscription">Pas encore inscrit ? <a href="./inscription.php">Inscrivez-vous !</a></span>
            </form>
    </main>
    
</body>
</html>