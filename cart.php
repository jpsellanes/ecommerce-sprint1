<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tu carrito</title>
    <script src="https://kit.fontawesome.com/81327c1797.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style-cart.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        <div class="container">
            <header>
                <div class="header">
                    <div class="logo">
                        <a href="index.php"><img src="img/Logo Version 1.0.png" alt="logo"></a>
                    </div>
                    <div class="dropdown-categories">
                        <h3>
                            CATEGORIAS
                        </h3>
                    </div>
                    <div class="search">
                        <input type="search" name="search" id="search" placeholder="BUSCAR PRODUCTOS, MARCAS Y MAS">
                    </div>
                    <div class="cart">
                        <a href="cart.php"><img src="img/shopping-cart-solid.svg" alt="shopping-bag-solid"></a>
                    </div>
                    <div class="user-name">
                        <h3>
                            <a href="userprofile.php">NOMBRE</a>
                        </h3>
                    </div>
                    <div class="account">
                        <a href="userprofile.php"><img src="img/account.svg" alt="account"></a> 
                    </div>
                </div>
            </header>
            <section>
                <div class="main-cart">
                    <div class="titles">
                        <div class="active">
                            <h3>
                                CARRITO ( 3 )
                            </h3>
                        </div>        
                        <div class="saved">
                            <h3 class="grey">
                                GUARDADOS ( 0 )
                            </h3>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="item">
                        <img src="img/Image_5_A0_Rectangle_25_pattern@2x.png" alt="Image_5_A0_Rectangle_25_pattern">
                        <div class="item-quantity">
                            <h3>
                                REMERA X
                            </h3>
                            <h3 class="grey">
                                CANTIDAD (1)
                            </h3>
                        </div>
                        <div class="item-property">
                            <div>
                                <h3 class="grey">
                                    GUARDAR PARA DESPUES
                                </h3>
                            </div>
                            <div class="delete">
                                <h3 class="grey">
                                    ELIMINAR
                                </h3>
                            </div>
                            <div class="free">
                                <h3 class="grey">
                                    ENVIO GRATIS
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="item">
                        <img src="img/Image_8_A0_Rectangle_31_pattern@2x.png" alt="Image_8_A0_Rectangle_31_pattern">
                        <div class="item-quantity">
                            <h3>
                                ZAPATILLAS X
                            </h3>
                            <h3 class="grey">
                                CANTIDAD (1)
                            </h3>
                        </div>
                        <div class="item-property">
                            <div>
                                <h3 class="grey">
                                    GUARDAR PARA DESPUES
                                </h3>
                            </div>
                            <div class="delete">
                                <h3 class="grey">
                                    ELIMINAR
                                </h3>
                            </div>
                            <div class="free">
                                <h3 class="grey">
                                    ENVIO GRATIS
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="item">
                        <img src="img/Image_7_A0_Rectangle_29_pattern@2x.png" alt="Image_7_A0_Rectangle_29_pattern">
                        <div class="item-quantity">
                            <h3>
                                PANTALON X
                            </h3>
                            <h3 class="grey">
                                CANTIDAD (1)
                            </h3>
                        </div>
                        <div class="item-property">
                            <div>
                                <h3 class="grey">
                                    GUARDAR PARA DESPUES
                                </h3>
                            </div>
                            <div class="delete">
                                <h3 class="grey">
                                    ELIMINAR
                                </h3>
                            </div>
                            <div class="free">
                                <h3 class="grey">
                                    ENVIO GRATIS
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="separator"></div>
                    <div class="continue">
                        <div class="total">
                            <div>
                                <h3>
                                    PRODUCTOS ( 3 )
                                </h3>
                            </div>
                            <div>
                                <h3>
                                    $7299.99
                                </h3>
                            </div>
                        </div>
                        <button>CONTINUAR COMPRA</button>
                    </div>
                </div>
            </section>
            <section>
                <h3 class="similar-title">
                    PRODUCTOS SIMILARES
                </h3>
                <div class="similar">
                    <div class="similar-product">
                        <img src="img/Image_5_A0_Rectangle_25_pattern@2x.png" alt="5">
                        <h3>
                            REMERA X
                        </h3>
                    </div>
                    <div class="similar-product">
                        <img src="img/Image_6_A0_Rectangle_27_pattern@2x.png
                        " alt="6">
                        <h3>
                            BUZO X
                        </h3>
                    </div>
                    <div class="similar-product">
                        <img src="img/Image_7_A0_Rectangle_29_pattern@2x.png" alt="7">
                        <h3>
                            PANTALON X
                        </h3>
                    </div>
                    <div class="similar-product">
                        <img src="img/Image_8_A0_Rectangle_31_pattern@2x.png" alt="8">
                        <h3>
                            ZAPATILLA X
                        </h3>
                    </div>
                </div>
            </section>
            <?php
            include 'includes/footer.php';
            ?>
        </div>
    </main>
</body>
</html>