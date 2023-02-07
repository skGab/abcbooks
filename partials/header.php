<?php $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1); ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/icons/form.png" type="image/x-icon">
    <title>ABC Books</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="/assets/node_modules/bootstrap/compiler/css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- ANIMATIONS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../assets/css/compressed/style.min.css">

    <?php if ($curPageName == 'index.php' or $curPageName == 'quem-somos.php') : ?>
        <!-- HOME PAGE STYLE -->
        <link rel="stylesheet" href="../old/style.css">
    <?php endif ?>
</head>

<body>
    <!-- HEADER -->
    <header id="header" class="fixed-top d-block">
        <nav id="navbar" class="navbar container navbar-expand-lg navbar-light bg-transparent" style="<?php echo ($curPageName == 'interna.php') ? 'color:red!important;' : 'color:blue!important;' ?>">
            <a class="navbar-brand" href="/index.php">
                <img src="/assets/img/logo.svg" alt="Logo ABC BOOKS">
            </a>
            <button class="navbar-toggler" style="border: none;" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <img id="menu-white" style="max-width: 28px;" src="/assets/icons/menu-hamburguer.png" class="img-fluid <?php echo ($curPageName == 'interna.php') ? 'hidden' : '' ?>" alt="Menu Hamburguer Branco">
                <img id="menu-dark" style="max-width: 28px;" src="/assets/icons/menu-hamburguer-dark.png" class="img-fluid <?php echo ($curPageName == 'interna.php') ? '' : 'hidden' ?>" alt="Menu Hamburguer Azul-escuro">
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <ul class="navbar-nav pr-md-0 pr-3 align-items-end align-items-lg-center">
                    <?php if ($curPageName == 'interna.php') : ?>
                        <style>
                            @media only screen and (min-width:375px) {
                                a {
                                    color: #28328C !important;
                                }
                            }
                        </style>
                    <?php endif ?>

                    <a class="nav-item nav-link my-2 my-lg-0 " href="#">
                        <img id="search-white" style="max-width: 25px;" class="img-fluid" src="/assets/icons/search.png" alt="Icone Buscar Branco">
                        <img id="search-dark" style="max-width: 25px;" class="img-fluid hidden" src="/assets/icons/search-dark.png" alt="Icone Busca Azul Escuro">
                    </a>


                    <a class="nav-item nav-link" href="/index.php">Home</a>


                    <a class="nav-item nav-link" href="/quem-somos.php">Quem Somos</a>


                    <a class="nav-item nav-link" href="/publicacoes.php">Publicações</a>


                    <a class="nav-item nav-link" href="/onde-encontrar.php">Onde Encontrar</a>


                    <a class="nav-item nav-link" href="/contato.php">Contato</a>
            </div>
            </div>
        </nav>
    </header>
    <!-- END HEADER -->