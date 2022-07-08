<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mexican Restaurant</title>
</head>

<body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
        <div class="container">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/logo.webp" width="250px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">Welcome</a>
                    <a class="nav-link active" href="#">Menu</a>
                    <a class="nav-link" href="pictures.php">Pictures</a>
                    <a class="nav-link" href="restaurants.php">Restaurants</a>
                    <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                    <a class="nav-link" aria-current="page" href="comments.php">Comments</a>
                    <a class="nav-link" aria-current="page" href="backoffice.php">Backoffice</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- header -->
    <header class="container-fluid" style="margin-top: 106px;">
        <div class="row" style="height: 300px;">
            <div class="overflow-hidden col d-flex justify-content-center align-items-center text-white position-relative">
                <img class="w-100 position-absolute" style="min-height: 100%;" src="../images/bg-menu-header.webp" alt="background header menu">
            </div>
        </div>
    </header>

    <!-- menu -->
    <div class="container-fluid">
        <div class="container">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item my-5">
                    <div class="row">
                        <h1 class="col-12 accordion-header" id="headingOne">
                            <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <h1>Entrées</h1>
                            </button>
                        </h1>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="row justify-content-evenly pb-5">
                            <div class="col-8 col-lg-4 m-5 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center align-items-stretch text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/doritos.webp" style="min-width: 100%;" alt="nacho">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Nacho</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">7,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/quesadilla.webp" style="min-width: 100%;" alt="quesdilla">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Quesdilla</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">7,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/taco.webp" style="min-width: 100%;" alt="taco">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Taco</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">7,00€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item my-5">
                    <div class="row">
                        <h1 class="col-12 accordion-header" id="headingOne">
                            <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <h1>Plats</h1>
                            </button>
                        </h1>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="row justify-content-evenly pb-5">
                            <div class="col-8 col-lg-4 m-5 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/burrito.webp" style="min-width: 100%;" alt="burito">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Burrito</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">15,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/tortillas.webp" style="min-width: 100%;" alt="tortillas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Tortillas</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">17,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/carnitas.webp" style="min-width: 100%;" alt="carnitas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Carnitas</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">15,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/enchiladas.webp" style="min-width: 100%;" alt="enchiladas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Enchiladas</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">15,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/fajitas.webp" style="min-width: 100%;" alt="fajitas">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Fajitas</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">15,00€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item my-5">
                    <div class="row">
                        <h1 class="col-12 accordion-header" id="headingOne">
                            <button class="accordion-button bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                <h1>Boissons & Desserts</h1>
                            </button>
                        </h1>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="row justify-content-evenly pb-5">
                            <div class="col-8 col-lg-4 m-5 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/boissons.webp" style="min-width: 100%;" alt="boissons">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Boissons</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">3,00€</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8 m-5 col-lg-4 col-xl-3 d-flex flex-column justify-content-stretch rounded-2 overflow-hidden bg-secondary bg-opacity-25 shadow-lg mb-3">
                                <div class="row">
                                    <div class="col-12 overflow-hidden g-0 d-flex justify-content-center text-center" style="height: 200px;">
                                        <img class="item-menu-img" src="../images/desserts.webp" style="min-width: 100%;" alt="desserts">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <h1 class="mt-3 text-danger">Desserts</h1>
                                        <span class="badge badge-secondary bg-success px-3 py-2 fs-3 mb-3">5,00€</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="../script/script.js"></script>


</body>

</html>