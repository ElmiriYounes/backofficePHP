<?php
include_once '../php/connection.php';
include_once '../php/functions.php';
if (isset($_POST['deleteMsg'])) {
    deleteMsg($db, $_POST['deleteMsg']);
}
if (isset($_POST['deleteComment'])) {
    deleteComment($db, $_POST['deleteComment']);
}
if (isset($_POST['deleteGallery'])) {
    deleteGallery($db, $_POST['deleteGallery']);
}

if (isset($_POST['upload'])) {
    addGallery($db, $_FILES['file']);
}
// if (isset($_FILES['file'])) {
//     echo "<script>alert('Message added successfully')</script>";
//     addGallery($db, $_FILES['file']);
// }
?>
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
                    <a class="nav-link" aria-current="page" href="comments.php">Comments</a>
                    <a class="nav-link active" aria-current="page" href="backoffice.php">Backoffice</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- header -->
    <header class="container-fluid" style="margin-top: 106px;">
        <?php
        if (isset($_POST['category'])) {
            if ($_POST['category'] == 'guest book') {
                echo "<h1 class='text-center bg-success py-3 text-white'>Guest Book</h1>";
            } elseif ($_POST['category'] == 'gallery') {
                echo "<h1 class='text-center bg-success py-3 text-white'>Gallery</h1>";
            } else {
                echo "<h1 class='text-center bg-success py-3 text-white'>Messages</h1>";
            }
        } else {
            echo "<h1 class='text-center bg-success py-3 text-white'>Messages</h1>";
        }
        ?>
    </header>

    <!-- table -->
    <div class="container py-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class=" col-2">
                    <button class="w-100 <?php if (isset($_POST['category']) && $_POST['category'] == 'msg' || !isset($_POST['category'])) {
                                                echo 'bg-danger text-white';
                                            } ?> py-2" name="category" value="msg">Messages</button>
                    <button class="w-100 <?php if (isset($_POST['category']) && $_POST['category'] == 'guest book') {
                                                echo 'bg-danger text-white';
                                            } ?> py-2" name="category" value="guest book">Guest Book</button>
                    <button class="w-100 <?php if (isset($_POST['category']) && $_POST['category'] == 'gallery') {
                                                echo 'bg-danger text-white';
                                            } ?> py-2" name="category" value="gallery">Gallery</button>
                </div>
                <div class="col-10">
                    <?php if (isset($_POST['category']) && $_POST['category'] == 'msg' || !isset($_POST['category'])) {
                        echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach (getMessages($db, 'messages') as $i => $value) {
                            echo '<tr>
                                <td>
                                    ' . $value['date'] . $i % 2 . '
                                </td>
                                <td>
                                    ' . $value['name'] . '
                                </td>
                                <td>
                                    ' . $value['email'] . '
                                </td>
                                <td>
                                    ' . $value['message'] . '
                                </td>
                                <td>
                                    <button class="py-2 px-4 border-0 bg-danger text-white" name="deleteMsg" value=' . $value['id'] . '>Delete</button>
                                </td>
                            </tr>';
                        }
                        echo '</tbody>
                    </table>';
                    } elseif (isset($_POST['category']) && $_POST['category'] == 'guest book') {
                        echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">Visited Restaurant</th>
                                <th scope="col">Comment</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach (getMessages($db, 'comments') as $value) {
                            echo '<tr>
                                    <td>
                                        ' . $value['date'] . '
                                    </td>
                                    <td>
                                        ' . $value['name'] . '
                                    </td>
                                    <td>
                                        ' . $value['resto'] . '
                                    </td>
                                    <td>
                                        ' . $value['comment'] . '
                                    </td>
                                    <td>
                                        <button class="py-2 px-4 border-0 bg-danger text-white" name="deleteComment" value=' . $value['id'] . '>Delete</button>
                                    </td>
                                </tr>';
                        }
                        echo '</tbody>
                    </table>';
                    } elseif (isset($_POST['category']) && $_POST['category'] == 'gallery') {
                    ?>

                    Select image to upload:<br /><br />
                    <input class="py-2 px-4 border-0 bg-danger text-white" type="file" name="file"><br /><br />
                    <button class="py-2 px-4 border-0 bg-success text-white" name="upload">Upload</button><br /><br />

                    <?php
                        echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Name</th>
                                <th scope="col">delete</th>
                            </tr>
                        </thead>
                        <tbody>';
                        foreach (getMessages($db, 'gallery') as $value) {
                            echo '<tr>
                                    <td>
                                        ' . $value['date'] . '
                                    </td>
                                    <td>
                                        ' . $value['name'] . '
                                    </td>
                                    <td>
                                        <button class="py-2 px-4 border-0 bg-danger text-white" name="deleteGallery" value=' . $value['id'] . '>Delete</button>
                                    </td>
                                </tr>';
                        }
                        echo '</tbody>
                    </table>';
                    } ?>
                </div>
        </form>
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