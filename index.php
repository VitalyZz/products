<?php
session_start();
require_once 'connect.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php require_once 'outPut.php'?>
        <form action="addItem.php" method="GET" class="formAdd">
            <input type="text" name="name" placeholder="Enter the name">
            <input type="text" name="description" placeholder="Enter the description">
            <input type="text" name="full_text" placeholder="Enter the full_text">
            <input type="text" name="category" placeholder="Enter the category">
            <input type="text" name="status" placeholder="Enter the status">
            <button type="submit">Add</button>
            <p><?= $_SESSION['message']; unset($_SESSION['message'])?></p>
        </form>
    </div>
</body>
</html>
