<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../index.php">Welcome</a>
                    <a class="nav-link" href="menu.php">Menu</a>
                    <a class="nav-link active" href="#">Pictures</a>
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
            <div
                class="overflow-hidden col d-flex justify-content-center align-items-center text-white position-relative">
                <img class="w-100 position-absolute" style="min-height: 100%;" src="../images/bg-gallery.webp"
                    alt="background header gallery">
            </div>
        </div>
    </header>

    <!-- gallerie -->
    <div class="container" id="gallery-container">
        <div class="row pt-5">
            <div class="col-12">
                <h1 class="text-center text-white display-2 bg-success">Gallerie</h1>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center gallery">
                <?php
                include_once '../php/connection.php';
                $reponse = $db->query("SELECT * from gallery");
                $images = $reponse->fetchAll(PDO::FETCH_ASSOC);
                foreach ($images as $key => $image) {
                    echo '<div class="col-lg-4 m-5 d-flex justify-content-center align-items-center overflow-hidden">
                    <img src="../images/' . $image['name'] . '" width="100%" alt=""></div>';
                }
                ?>
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
    <script src="../script/script.js"></script>


</body>

</html>