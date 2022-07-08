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
                    <a class="nav-link" href="pictures.php">Pictures</a>
                    <a class="nav-link" href="restaurants.php">Restaurants</a>
                    <a class="nav-link" aria-current="page" href="contact.php">Contact</a>
                    <a class="nav-link active" aria-current="page" href="#">Comments</a>
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
                <img class="w-100 position-absolute" style="min-height: 100%;" src="../images/bg-comments.jpg"
                    alt="background header restaurants">
            </div>
        </div>
    </header>

    <!-- form -->
    <div class="container py-5">
        <form method="POST" action="comments.php"
            class="row g-0 flex-column align-items-center justify-content-center text-white">
            <div class="col-12 col-lg-6 bg-success d-flex flex-column justify-content-center pb-5 pt-4 px-2">
                <div class="col-12">
                    <label for="validationServer02" class="form-label">Name</label>
                    <input name="name" maxlength="255" type="text" class="form-control" placeholder="Durand Olivier"
                        required>
                </div>
                <div class="col-12">
                    <label for="validationServerUsername" class="form-label">Visited restaurant</label>
                    <select class="d-block" name="resto">
                        <option value="bruxelles">Bruxelles</option>
                        <option value="anvers">Anvers</option>
                        <option value="malines">Malines</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="validationServer02" class="form-label">Visited date</label>
                    <input name="date" type="date" class="form-control" required>
                </div>
                <div class="col-12">
                    <label for="validationServer02" class="form-label">Comment (optional)</label>
                    <input name="comment" maxlength="255" type="text" class="form-control"
                        placeholder="Your message here...">
                </div>
                <div class="col-12 text-center mt-5">
                    <button class="btn btn-danger" type="submit">Submit form</button>
                </div>
            </div>
        </form>
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

    <?php
    include_once '../php/connection.php';
    include_once '../php/functions.php';
    include_once '../php/variables.php';

    if (isset($_POST['name']) && isset($_POST['resto']) && isset($_POST['date']) && isset($_POST['comment'])) {
        addComment($db, $name, $resto, $date, $comment);
    }
    ?>
</body>

</html>