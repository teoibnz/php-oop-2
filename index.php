<?php 
    include_once __DIR__ . "./classes/product.php";
    include_once __DIR__ . "/classes/food.pp";
    include_once __DIR__ . "/classes/toys.hp";
    include_once __DIR__ . "/classes/dogKnnel.php";

$croccantini = new Food ("Croccantini Magici", "cane", 2023, 12.99, 24, 0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
</head>
<body>
    <main>
        <span>
            <?php  
                var_dump($croccantini);
                echo $croccantini-> getFoodExpiry();            
            ?>
        </span>
    </main>
</body>
</html>