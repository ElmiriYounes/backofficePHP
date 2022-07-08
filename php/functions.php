<?php

function addMsg(object $db, string $name, string $email, string $msg)
{
    date_default_timezone_set('Europe/Brussels');
    $date = date('Y-m-d H:i:s');

    $data = [
        'date' => $date,
        'name' => $name,
        'email' => $email,
        'msg' => $msg,
    ];
    $sql = 'INSERT INTO messages (date, name, email, message) VALUES (:date, :name, :email, :msg)';
    if ($stmt = $db->prepare($sql)) {
        $stmt->execute($data);
        echo "<script>alert('Message added successfully')</script>";
    } else {
        echo "<script>alert('Error on insert')</script>";
    }
}

function getMessages(object $db, string $table): array
{
    $reponse = $db->query("SELECT * from $table");
    $messages = $reponse->fetchAll(PDO::FETCH_ASSOC);
    return $messages;
}

function deleteMsg(object $db, string $item)
{
    $id = $item;
    $sql = 'DELETE from messages WHERE id = :id';
    $del = $db->prepare($sql);
    $del->bindValue(':id', $id);
    $count = $del->execute();
    if ($count > 0) {
        echo '<script>alert("Item deleted successfully !");</script>';
    } else {
        echo '<script>alert("Error to delete the item: try again");</script>';
    }
}

function addComment(object $db, string $name, string $resto, $date, string $comment)
{

    $data = [
        'date' => $date,
        'name' => $name,
        'resto' => $resto,
        'comment' => $comment,
    ];
    $sql = "INSERT INTO comments (date, name, resto, comment) VALUES (:date, :name, :resto, :comment)";
    if ($stmt = $db->prepare($sql)) {
        $stmt->execute($data);
        echo "<script>alert('Message added successfully')</script>";
    } else {
        echo "<script>alert('Error on insert')</script>";
    }
}

function deleteComment(object $db, string $item)
{
    $id = $item;
    $sql = 'DELETE from comments WHERE id = :id';
    $del = $db->prepare($sql);
    $del->bindValue(':id', $id);
    $count = $del->execute();
    if ($count > 0) {
        echo '<script>alert("Item deleted successfully !");</script>';
    } else {
        echo '<script>alert("Error to delete the item: try again");</script>';
    }
}

function addGallery(object $db, $file)
{
    $uploadDirectory = "../images/";

    $errors = []; // Store errors here

    $fileExtensionsAllowed = ['jpeg', 'jpg', 'png', 'webp']; // These will be the only file extensions allowed 

    $fileName = $file['name'];
    $fileTmpName  = $file['tmp_name'];
    $explode = explode('.', $fileName);
    $fileExtension = strtolower(end($explode));
    $uploadPath = $uploadDirectory . basename($fileName);

    if (!in_array($fileExtension, $fileExtensionsAllowed)) {
        $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTmpName, $uploadPath);
        $date = date('Y-m-d');
        $data = [
            'date' => $date,
            'name' => $file['name'],
        ];
        $sql = 'INSERT INTO gallery (date, name) VALUES (:date, :name)';
        if ($stmt = $db->prepare($sql)) {
            $stmt->execute($data);
            echo "<script>alert('File added successfully')</script>";
        } else {
            echo "<script>alert('Error on insert')</script>";
        }
        if (!$didUpload) {
            echo "An error occurred. Please contact the administrator.";
        }
    } else {
        echo "<script>alert('This file extension is not allowed. Please upload a JPEG or PNG file')</script>";
    }
}

function deleteGallery(object $db, $id)
{
    $id = $id;
    $sql = 'DELETE from gallery WHERE id = :id';
    $del = $db->prepare($sql);
    $del->bindValue(':id', $id);
    $count = $del->execute();
    if ($count > 0) {
        echo '<script>alert("Item deleted successfully !");</script>';
    } else {
        echo '<script>alert("Error to delete the item: try again");</script>';
    }
}