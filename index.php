<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Mexican Restaurant</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/logo.webp" width="250px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="#">Welcome</a>
                    <a class="nav-link" href="./pages/menu.php">Menu</a>
                    <a class="nav-link" href="./pages/pictures.php">Pictures</a>
                    <a class="nav-link" href="./pages/restaurants.php">Restaurants</a>
                    <a class="nav-link" aria-current="page" href="./pages/contact.php">Contact</a>
                    <a class="nav-link" aria-current="page" href="./pages/comments.php">Comments</a>
                    <a class="nav-link" aria-current="page" href="./pages/backoffice.php">Backoffice</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- header -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 106px;">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner position-relative">
            <div class="carousel-item active" style="max-height: calc(100vh - 106px);">
                <img src="images/hero-bg-1.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="title-header-home display-1 fw-bold position-relative" style="z-index: 1;">Goût
                        irrésistble</h1>
                </div>
            </div>
            <div class="carousel-item" style="max-height: calc(100vh - 106px);">
                <img src="images/hero-bg-2.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="title-header-home display-1 fw-bold position-relative" style="z-index: 1;">Savoureux</h1>
                </div>
            </div>
            <div class="carousel-item" style="max-height: calc(100vh - 106px);">
                <img src="images/hero-bg-3.webp" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="title-header-home 
                    display-1 fw-bold position-relative" style="z-index: 1;">Large choix</h1>
                </div>
            </div>
            <div class="bg-linear d-block w-100 h-100 position-absolute"
                style="background: linear-gradient(rgb(0,0,0,0.2), rgb(0,0,0,0.5));"></div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- intro -->
    <div class="container py-5 mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex flex-column align-items-center">
                <img src="images/icon-tacos.webp" width="150px" alt="icon tacos">
                <p class="pt-3">
                    <span class="text-danger fw-bold">Envie</span> de sortir de la routine des fast-foods burgers,
                    pizzas ou encore sushis ? Envie de tester quelque chose de <span
                        class="text-danger fw-bold">nouveau</span>?
                    Rien de mieux qu'une <span class="text-danger fw-bold">spécialité mexicaine</span> ! Vous trouverez
                    dans notre réputé restaurant la <span class="text-danger fw-bold">saveur</span> et <span
                        class="text-danger fw-bold">le goût</span> recherchés.
                </p>
            </div>
        </div>
    </div>

    <!-- event -->
    <div class="container-fluid bg-secondary bg-opacity-10 py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center me-lg-5">
                    <div class="image-event position-relative bg-dark w-100">
                        <img src="images/event.webp" class="w-100" alt="image event">
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex pt-5 pt-lg-0 ms-lg-5">
                    <div class="row pt-lg-0">
                        <div class="col-12 g-0 pt-5 pt-lg-0">
                            <span
                                class="d-block fw-bold fs-1 rounded-1 py-3 px-5 w-100 h-100 text-center bg-success text-white d-flex justify-content-center align-items-center">EVENT</span>
                        </div>
                        <div class="col-12 align-self-end pt-5 d-flex flex-column align-items-center">
                            <h2 class="display-6 fw-bold">Buffet à volonté</h2>
                            <p class="text-secondary pt-5 m-0">Nous organisons un <span
                                    class="text-danger fw-bold">buffet à
                                    volonté</span> 2 fois par semaine <span class="text-danger fw-bold">(tous les mardis
                                    et
                                    jeudis)</span> de l'ouverture à la fermeture.
                                Doritos, salades, tacos, vous trouverez votre <span
                                    class="text-danger fw-bold">gourmandise
                                    mexicaine</span>
                                favorite ! Nous disposons d'une salle de plus de 500m² afin de vous garantir un confort
                                et une ergonomie optimales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- promo -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-4 d-flex justify-content-center align-items-center ms-lg-5 order-lg-1">
                    <div class="image-event position-relative bg-dark w-100">
                        <img src="images/promo.webp" class="w-100" alt="image event">
                    </div>
                </div>
                <div class="col-12 col-lg-6 d-flex pt-5 pt-lg-0 me-lg-5">
                    <div class="row pt-lg-0">
                        <div class="col-12 g-0 pt-5 pt-lg-0">
                            <span
                                class="d-block fw-bold fs-1 rounded-1 py-3 px-5 w-100 h-100 text-center bg-success text-white d-flex justify-content-center align-items-center">PROMO</span>
                        </div>
                        <div class="col-12 align-self-end pt-5 d-flex flex-column align-items-center">
                            <h2 class="display-6 fw-bold">Fidélité</h2>
                            <p class="text-secondary pt-5 m-0">Profitez de notre <span
                                    class="text-danger fw-bold">promotion</span> sans plus tarder en
                                collectionner nos <span class="text-danger fw-bold">tampons</span>.
                                Rien de plus simple, après 5 commandes = <span class="text-danger fw-bold">- 70% de
                                    remise</span> sur vos 2 prochaines commandes
                                suivantes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- menu -->
    <div class="container-fluid py-5 d-flex justify-content-center align-items-center text-white"
        style="background: linear-gradient(rgb(0,0,0,0.5), rgb(0,0,0,0.6)), url('images/bg-fixed.webp') fixed no-repeat center center/cover;">
        <div class="row justify-content-center py-5 px-3">
            <div class="col-12 col-lg-6">
                <h1 class="display-5 fw-bold">Affamé?</h1>
                <p class="col-12 fs-4 py-2">Des appétissantes entrées aux somptueux désserts, des irrésistibles tacos
                    aux
                    délicieux plats, vous trouverez votre bonheur dans notre large choix.</p>
                <a href="pages/menu.html">
                    <button class="btn btn-success btn-lg" type="button">Voir notre menu</button>
                </a>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="container-fluid bg-dark py-3">
        <div class="row">
            <div class="col-12 text-center text-white">
                <span>Mexican restaurant&copy;2022</span>
            </div>
        </div>
    </div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="script/script.js"></script>

</body>

</html>