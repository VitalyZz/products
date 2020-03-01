<?php
session_start();
require_once 'connect.php';
$id = $_GET['hide'];
if (mysqli_fetch_assoc(mysqli_query($connect, "SELECT status FROM product WHERE id = '$id'"))['status'] == 'hide') {
    mysqli_query($connect, "UPDATE product SET status = 'show' WHERE id = $id");
    $_SESSION['message'] = 'Item was open!';
}
else {
    mysqli_query($connect, "UPDATE product SET status = 'hide' WHERE id = $id");
    $_SESSION['message'] = 'Item was hidden!';
}
header('Location: index.php');