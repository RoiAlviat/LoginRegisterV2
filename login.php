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
                <input class="inputtext" type="text" name="pseudo" id="pseudo" placeholder="Votre Pseudo" required>
                <input class="inputtext" type="text" name="mdp" id="mdp" placeholder="Votre mot de passe" required>
                <input class="inputsubmit" value="Connexion" type="submit" name="envoie" id="envoie">
                <span class="inscription">Pas encore inscrit ? <a href="./register.php">Inscrivez-vous !</a></span>
            </form>


        </div>
        

    </main>
    
</body>
</html>