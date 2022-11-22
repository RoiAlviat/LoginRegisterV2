<?php
    require_once 'connection.php';

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,200;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/83ac43579f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/login.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <form method="post">
                <span>Login</span>
                <input class="inputtext" type="text" name="mail" id="mail" placeholder="Votre adresse mail" required>
                <input class="inputtext" type="text" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
                <input class="inputsubmit" value="Connexion" type="submit" name="envoie" id="envoie">
                <span class="inscription">Pas encore inscrit ? <a href="./register.php">Inscrivez-vous !</a></span>
            </form>


        </div>
        

    </main>
    
</body>
</html>