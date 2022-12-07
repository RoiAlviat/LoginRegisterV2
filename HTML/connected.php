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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="./css/connected.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="logo">
        <img src="./css/img/pizzalogo.png" alt="">
        </div>
        <nav>

            
            <a href=""><div class="connexion"><i class="fa-solid fa-user"></i></div></a>
            
            <a href=""><div class="accueil">Accueil</div></a>

            <a href=""><div class="Commandez">Commandez</div></a>

            <a href=""><div class="contacthoraire">Contact & Horaires</div></a>

            <div><i class="fa-solid fa-cart-shopping"></i>
                <div class="shop-container">
                    <div class="shop-article article1">
                        <div class="qte center"><span>1</span></div>
                        <div class="choix-article center"><span>Royale Large</span></div>
                        <div class="prix-article center">9.99€</div>
                    </div>
                </div>
            </div>
            
                
        </nav>

    </header>


    
       <div class="container">

            <div class="swiper mySwiper">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card">
                            <h1>KEBAB</h1>
                            <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                            <div class="ingredients">
                                <span>-Base Crème-</span>
                                <span>-Viande de kébab-</span>
                                <span>-Oignons-</span>
                                <span>-Poivrons-</span>
                                <span>-Olives-</span>
                                <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                            </div>
                        </div>
                    </div>
              
                    <div class="swiper-slide">
                        <div class="card">
                            <h1>Royale</h1>
                            <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                            <div class="ingredients">
                                <span>-Base Tomate-</span>
                                <span>-Champignons-</span>
                                <span>-Fromage-</span>
                                <span>-Olives-</span>
                                <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card">
                            <h1>Chorizo</h1>
                            <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                            <div class="ingredients">
                                <span>-Base Tomate-</span>
                                <span>-Chorizo-</span>
                                <span>-Fromage-</span>
                                <span>-Olives-</span>
                                <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                            </div>
                        </div>
                    </div>


                <div class="swiper-slide">

                    <div class="card">
                        <h1>Chèvre</h1>
                        <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                        <div class="ingredients">
                            <span>-Base Tomate-</span>
                            <span>-Fromage de chèvre-</span>
                            <span>-Fromage-</span>
                            <span>-Olives-</span>
                            <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                        </div>
                    </div>
                </div>
            <div class="swiper-slide">
                <div class="card">
                    <h1 class="montagnarde">Montagnarde</h1>
                    <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                    <div class="ingredients">
                        <span>-Base Tomate-</span>
                        <span>-Roblochon-</span>
                        <span>-Olives-</span>
                        <span>-Oignons-</span>
                        <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <h1 class="norvégienne">Norvégienne</h1>
                    <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                    <div class="ingredients">
                        <span>-Base Tomate-</span>
                        <span>-Saumon fumée-</span>
                        <span>-Fromage-</span>
                        <span>-Olives-</span>
                        <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="card">
                    <h1>Oriental</h1>
                    <div class="prix">MOYENNE 8€ - GRANDE 12€</div>
                    <div class="ingredients">
                        <span>-Base Tomate-</span>
                        <span>-Merguez-</span>
                        <span>-Oignons-</span>
                        <span>-Poivrons-</span>
                        <span>-Olives-</span>
                        <div>
                                    <button>M</button>
                                    <button>L</button>
                                </div>
                    </div>
                </div>
            </div>

            </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div> 
        </div>       
    
    
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      spaceBetween: 210,
      loop: true,
      autoplay: {
          delay: 2500,
          disableOnInteraction: true,
        },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>

</html>
