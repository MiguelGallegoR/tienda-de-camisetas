<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Tienda de Camisetas</title>
</head>
<body>
    <div id="container">
        <!-- CABECERA-->
            <header id="header">
                <div id="logo">
                    <img src="assets/img/camiseta.png" alt="Camiseta Logo">
                    <a href="index.php">
                        Tienda de camisetas 
                    </a>
                </div>
            </header>

        <!-- MENU-->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="#">Inicio</a>
                    </li>
                    <li>
                        <a href="#">Categoría 1</a>
                    </li>
                    <li>
                        <a href="#">Categoría 2</a>
                    </li>
                    <li>
                        <a href="#">Categoría 3</a>
                    </li>
                    <li>
                        <a href="#">Categoría 4</a>
                    </li>
                    <li>
                        <a href="#">Categoría 5</a>
                    </li>
                </ul>
            </nav>

            <div id="content">

        <!-- BARRA LATERAL-->
                <aside id="lateral">
                    <div id="login" class="block_aside">
                        <h3>Entrar a la web</h3>
                        <form action="#" method="post">
                            <label for="email">Email</label>
                            <input type="email" name="email">
                            <label for="password">Contraseña</label>
                            <input type="password" name="password">
                            <input type="submit" value="Enviar">
                        </form>
                        <ul>
                            <li><a href="#">Mis pedidos</a></li>
                            <li><a href="#">Gestionar pedidos</a></li>
                            <li><a href="#">Gestionar categorias</a></li>
                        </ul>
                        
                        
                        
                    </div>
                </aside>

        <!-- CONTENIDO CENTRAL-->
                <div id="central">
                    <h1>Productos destacados</h1>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="">
                        <h2>Camiseta Azul Olgada Ancha</h2>
                        <p>30 euros</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="">
                        <h2>Camiseta Azul Olgada Ancha</h2>
                        <p>30 euros</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="">
                        <h2>Camiseta Azul Olgada Ancha</h2>
                        <p>30 euros</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                    <div class="product">
                        <img src="assets/img/camiseta.png" alt="">
                        <h2>Camiseta Azul Olgada Ancha</h2>
                        <p>30 euros</p>
                        <a href="" class="button">Comprar</a>
                    </div>
                </div>

            </div>

        <!-- PIE DE PAGINA-->
        <footer id="footer">
            <p>Desarrollado por Miguel Gallego Rodríguez &copy; <?= date('Y') ?></p>
        </footer>

    </div>
</body>
</html>