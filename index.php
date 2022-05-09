<?php 
    include_once __DIR__ . "/classes/product.php";
    include_once __DIR__ . "/classes/food.php";
    include_once __DIR__ . "/classes/toys.php";

$croccantini = new Food ("Croccantini Magici", "cane", 2023, 12.99, 24, 0);
$ossoGiocattolo = new Toys ("Osso Giocattolo", 12.99, 24, 0);


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
        <pre>
            <?php  
                var_dump($croccantini);
            ?>
        </pre>
        <pre>
            <?php  
                var_dump($ossoGiocattolo);
            ?>
        </pre>
    </main>
</body>
</html>