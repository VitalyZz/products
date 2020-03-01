<?php
session_start();
require_once 'connect.php';
$name = $_GET['name'];
$description = $_GET['description'];
$full_text = $_GET['full_text'];
$category = $_GET['category'];
$status = $_GET['status'];
$id = $_GET['changeId'];

if (!empty($name)) {
    mysqli_query($connect, "UPDATE product SET name = '$name', description = '$description', full_text = '$full_text', category = '$category', status = '$status' WHERE id = '$id'");
    $_SESSION['message'] = 'Item was updated!';
}
else {
    $_SESSION['message'] = 'Error';
}

header('Location: index.php');