<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/styleForo.css?ver=1.2">
    <link rel="stylesheet" href="../fontawesome/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="../img/BT.ico">
    <title>Foro</title>
</head>

<body>
    <nav>
        <ul class="nav_izquierdo">
            <a href="index.php">
                <img id="icono" src="../img/logoV2.jpg">
            </a>
            <a href="contacto.php">
                <li><i class="fas fa-envelope-open-text"></i> Contacto</li>
            </a>
            <li></li>
        </ul>
        <ul class="nav_centro">
            <li class="buscador"><input type="search" placeholder="Buscar..."><i class="fas fa-search"></i></li>
        </ul>
        <ul class="nav_derecho">
            <a href="foro.php">
                <li>Foro</li>
            </a>
            <?php
            if (isset($_SESSION['usuario'])) {
                echo '<div class="user-profile">
                <li class="usuario" id="dropdownMenuLink">', $_SESSION['usuario']['nick'], '</li>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="biblioteca.php"><i class="fas fa-user"></i> Ver perfil</a>
                <a class="dropdown-item" href="..\private\updateUsuario.php"><i class="fas fa-cog"></i> Ajustes</a>';
                if ($_SESSION['usuario']['rol_id'] == 1) {
                    echo '<a class="dropdown-item" href="../private/index.php?tabla=bienvenido"><i class="fas fa-tools"></i></i> CRUD</a>';
                }
                echo '<a class="dropdown-item" href="../auth/logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                </div>
                </div>';
            } else {
                echo '<a href="../auth/login.php">
                <li class="usuario"><i class="fas fa-user"></i> Iniciar Sesión</li></a>';
            }
            ?>
        </ul>
    </nav>
    <div class="mainNaside">
        <main>
            <header>
                <h1>¡Bienvendios al foro!</h1>
                <p>Aquí podreis expresaros como querais sobre vuestros libros favoritos.</p>
            </header>

            <section>
                <div class="cabecero">
                    <img src="../img/foto_perfil1.jpg" width="60px" height="60px">
                    <p>
                        <snap>Pepita22</snap> dice...
                    </p>
                </div>
                <div class="cuerpo">
                    <p><i class="far fa-clock"></i> 15/11/22</p>
                    <p>La historia de la escritora basada en sus experiencias reales da mucho que pensar. ¿Quién iba a
                        imaginar que esta historieta tuviera tanto que contar?
                    </p>
                    <a href="foro.php">
                        <p>#Persépolis</p>
                    </a>
                </div>
            </section>
            <section>
                <div class="cabecero">
                    <img src="../img/foto_perfil2.png" width="60px" height="60px">
                    <p>
                        <snap>Lector123</snap> dice...
                    </p>
                </div>
                <div class="cuerpo">
                    <p><i class="far fa-clock"></i> 12/11/22</p>
                    <p> A mis niños les ha encantado el cuento de "Pupi y sus amigos". ¡Muchas gracias a todos los que
                        me lo
                        han recomendado!
                    </p>
                    <a href="foro.php">
                        <p>#Pupi y sus amigos</p>
                    </a>
                </div>
            </section>
            <section>
                <div class="cabecero">
                    <img src="../img/foto_perfil3.png" width="60px" height="60px">
                    <p>
                        <snap>CAPIPERCY</snap> dice...
                    </p>
                </div>
                <div class="cuerpo">
                    <p><i class="far fa-clock"></i> 09/11/22</p>
                    <p>
                        ¡No me esperaba ese giro en la trama justo al terminar el libro! Que momentos tan angustiosos he
                        tenido...
                    </p>
                    <a href="foro.php">
                        <p>#Perscy Jackson</p>
                    </a>
                </div>
            </section>
            <section>
                <div class="cabecero">
                    <img src="../img/foto_perfil4.png" width="60px" height="60px">
                    <p>
                        <snap>TeatroYmás</snap> dice...
                    </p>
                </div>
                <div class="cuerpo">
                    <p><i class="far fa-clock"></i> 29/10/22</p>
                    <p>
                        Aunque este poema apenas llegue a cuatro versos, su intención está muy clara. ¡Que arte!
                    </p>
                    <a href="foro.php">
                        <p>#Rimas(1871)</p>
                    </a>
                </div>
            </section>
        </main>
    </div>
    <footer>
        <address>
            <div>
                <p>Si quieres una forma más directa de contactarnos:</p>
                Email: hola@ejemplo.com
                <br>
                Teléfono: +34 777 77 77 77
            </div>
            <div>
                <p>Conócenos en...</p>
                <div class="redes">
                    <a href="https://twitter.com"> <i class="fab fa-twitter"></i></a>
                    <a href="https://telegram.org/"><i class="fab fa-telegram"></i></a>
                    <a href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </address>
    </footer>
</body>

</html>