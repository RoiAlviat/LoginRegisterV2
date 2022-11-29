<?php 

define('HOST', 'localhost');
define('DB_NAME', 'db');
define('USER', 'root');
define('PASS', '');

try {
    $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // print 'Connexion réussie !'.'<br/>'.'<br/>'; 
} catch(PDOException $e) {
    print $e;

}

?>


<div class="container">
                <div class="card swiper-slide">
                    <h1>PIZZA</h1>
                    <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                    <div class="ingredients">
                        <span>-BOUBOU-</span>
                        <span>-BOUBOU-</span>
                        <span>-BOUBOU-</span>
                        <span>-BOUBOU-</span>
                    </div>
                </div>
            </div>