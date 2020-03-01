<?php
    session_start();
    require_once 'connect.php';
    $name = $_GET['name'];
    $description = $_GET['description'];
    $full_text = $_GET['full_text'];
    $category = $_GET['category'];
    $status = $_GET['status'];
    if (!empty($name)) {
        mysqli_query($connect, "INSERT INTO product(name, description, full_text, category, status) VALUES('$name', '$description', '$full_text', '$category', '$status')");
        $_SESSION['message'] = 'Item was added!';
        header('Location: index.php');
    }
    else {
        $_SESSION['message'] = 'Error';
        header('Location: index.php');
    }