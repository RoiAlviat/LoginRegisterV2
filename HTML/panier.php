<?php require_once 'db.php';?>

<pre>
</pre>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Raleway:ital,wght@0,200;0,400;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/panier.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php $products = $DB->query('SELECT * FROM products'); ?>
        <?php foreach ($products as $product); ?>
        <span class="quantite">Quantité : </span>
        <span class="prix">Prix : </span>
        <span class="pizza">Pizza : </span>

    </div>
    
</body>
</html>