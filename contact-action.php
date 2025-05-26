<?php
    include "admin/config/koneksi.php";

    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $queryContact = mysqli_query($config, "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')");
    if ($queryContact) {
        header("location:contact.php?kirim=berhasil");
    }
?>