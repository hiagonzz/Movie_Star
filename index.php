<?php
require_once("globals.php");
require_once("db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MovieStar</title>
    <link rel="short icon" href="<?= $BASE_URL ?>img/movies/Star.png" />
    <!-- BOOTSTRAP CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.rtl.min.css" integrity="sha512-VNBisELNHh6+nfDjsFXDA6WgXEZm8cfTEcMtfOZdx0XTRoRbr/6Eqb2BjqxF4sNFzdvGIt+WqxKgn0DSfh2kcA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- BOOTSTRAP JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>

<body>
    <header>
        <nav id="main-navbar" class="navbar-expend-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand">
                <img src="<?= $BASE_URL ?>/img/logo.png" alt="MovieStar" id="logo">
                <span class="movie-title    " id="moviestar-title">MovieStart</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">

                <!-- <i class="fas fa-bars"></i> -->
            </button>

            <form action="" method="GET" id="seach-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar filmes" aria-label="Search">

                <button class="btn" type="submit"> <i class="fas fa-search"> </i></button>


            </form>

            <div class="collapse navbar-collapse" id="navbar"></div>
            <ul class="navbar-nav">

                <li class="nav-item">

                    <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="main-container" class="container-fluid">
        <h1>Corpo do site</h1>

    </div>

    <footer id="footer">

        <div id="social-container">
            <ul>

                <li>
                    <a id="facebook" href="#"> <i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a id="instagram" href="#"> <i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a id="youtube" href="#"> <i class="fab fa-youtube"></i></a>
                </li>

            </ul>

        </div>

        <div id="footer-links-container">
            <ul>
                <li>
                    <a id="add-list1" href="#">Adicionar Filme</a>
                    <a id="add-list2" href="#">Adicionar crítica</a>
                    <a id="add-list3" href="#">Entrar / Registrar</a>
                </li>
            </ul>

        </div>

        <p id="cop">&copy; 2024 Hiago.dev</p>


    </footer>
</body>

</html>