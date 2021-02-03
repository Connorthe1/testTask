<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Task</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<header>

</header>

<?php 
$src = file_get_contents('product.json');
$content = json_decode($src, true);
?>

<main>
    <?php foreach($content['product'] as $array): ?>

    <div class="block">
        <img src="<?=  $array["img"] ?>" alt="">
        <h3><?=  $array["name"] ?></h3>
        <h1><?=  $array["price"] ?> ₽</h1>
        <button class="open" onclick="openModal('<?=  $array['name'] ?>')" >Buy</button>
    </div>

    <?php endforeach ?>
</main>

<div id="modal" class="modal">


    <div class="modal-main">
        <div class="modal-header">
            <span class="close" id="close">&times;</span>
            <h2>Contact</h2>
        </div>
        <div class="modal-body">
            <form action="POST" class="form">
                <h2>Name</h2>
                <input type="text" placeholder="name">
                <h2>Phone</h2>
                <input type="text" placeholder="phone">
                <h2>Email</h2>
                <input type="text" placeholder="email">
                <h2>Item</h2>
                <input id="item" type="text" value="Chair" disabled>

                <button>Send</button>
            </form>
        </div>
    </div>

</div>

<script src="js/modal.js"></script> 

</body>
</html>