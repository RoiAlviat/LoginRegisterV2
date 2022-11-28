<?php
    if(isset($_POST['add'])){
        echo 'SY';
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
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Raleway:ital,wght@0,200;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/83ac43579f.js" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
        <img src="./css/img/pizzalogo.png" alt="">
        </div>
        <nav>

            
            <a href=""><div class="accueil">Accueil</div></a>

            <a href="./connexion.php"><div class="connexion">Connexion</div></a>

            <a href=""><div class="Commandez">Commandez</div></a>

            <a href=""><div class="contacthoraire">Contact & Horaires</div></a>

            <a href=""><div class="mentionlegales">Mentions Légales</div></a>

        </nav>
    </header>


    <main>
        <form method="post" class="menu-container">
            <div class="pizza-container">
                <div class="pizza">
                    <h1>Oriental</h1>
                </div>
                <div class="ingredients">
                    <h2>Moyenne 8€ - Grande 12€</h1>
                    <h3>Base Tomate</h2>
                    <h3>Merguez</h2>
                    <h3>Poivrons</h2>
                    <h3>Olives</h2>
                </div>
                <div class="add-item">
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>


            <div class="pizza-container">
                <div class="pizza">
                    <h1>Royale</h1>
                </div>
                <div class="ingredients">
                    <h2>Moyenne 8€ - Grande 12€</h1>
                    <h3>Base Tomate</h2>
                    <h3>Champignons</h2>
                    <h3>Fromage</h2>
                    <h3>Olives</h2>
                </div>
                <div class="add-item">
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>


            <div class="pizza-container">
                <div class="pizza">
                    <h1>Kébab</h1>
                </div>
                <div class="ingredients">
                    <h2>Moyenne 8€ - Grande 12€</h1>
                    <h3>Base Crème</h2>
                    <h3>Viande de kébab</h2>
                    <h3>Oignons</h2>
                    <h3>Olives</h2>
                </div>
                <div class="add-item">
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>


            <div class="pizza-container">
                <div class="pizza">
                    <h1>Chèvre</h1>
                </div>
                <div class="ingredients">
                    <h2>Moyenne 8€ - Grande 12€</h1>
                    <h3>Base Tomate</h2>
                    <h3>Fromage de Chèvre</h2>
                    <h3>Fromage</h2>
                    <h3>Olives</h2>
                </div>
                <div class="add-item">
                    <i class="fa-solid fa-plus"></i>
                </div>

                
            </div>
            
        </form>
    </main>
    
</body>
</html>
