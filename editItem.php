<?php
require_once 'connect.php';
$id = $_GET['change'];
$query = mysqli_query($connect, "SELECT name, description, full_text, category FROM product WHERE id = $id");
$res = mysqli_fetch_assoc($query);
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
    <form action="save.php" method="GET" class="formEdit">
        <input type="text" name="name" value="<?=$res['name']?>">
        <input type="text" name="description" value="<?=$res['description']?>">
        <input type="text" name="full_text" value="<?=$res['full_text']?>">
        <input type="text" name="category" value="<?=$res['category']?>">
        <input type="hidden" name="changeId" value="<?=$id?>">
        <button type="submit">Change</button>
    </form>
</body>
</html>
