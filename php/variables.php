<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
}

if (isset($_POST['name']) && isset($_POST['resto']) && isset($_POST['date']) && isset($_POST['comment'])) {
    $name = $_POST['name'];
    $resto = $_POST['resto'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];
}