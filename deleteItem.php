<?php
require_once 'connect.php';
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_item = mysqli_query($connect, "DELETE FROM product WHERE id = $id");
    $_SESSION['message'] = 'Item was deleted!';
    header('Location: index.php');
}