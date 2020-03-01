<?php
$query = mysqli_query($connect, "SELECT name, id, description, full_text, category, status FROM product");

?>

<?php while($res = mysqli_fetch_assoc($query)) {
    $res['status'] === 'hide' ? $hideShow = 'Show' : $hideShow = 'Hide';
    ?>
    <div class="card">
        <div class="name"><span>Name: </span><?=$res['name']?></div>
        <div class="description"><span>Description: </span><?=$res['description']?></div>
        <div class="full_text"><span>Full text: </span><?=$res['full_text']?></div>
        <div class="category"><span>Category: </span><?=$res['category']?></div>
        <div class="status"><span>Status: </span><?=$res['status']?></div>
        <div class="buttons">
            <a class="Delete <?=$res['status']?>" href="deleteItem.php?delete=<?=$res['id']?>">Delete</a>
            <a class="Change <?=$res['status']?>" href="editItem.php?change=<?=$res['id']?>">Change</a>
            <a class="Hide" href="hideItem.php?hide=<?=$res['id']?>"><?=$hideShow?></a>
        </div>
    </div>
<?php }?>

