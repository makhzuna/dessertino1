<?php
$sliv = [
    "Сливочное",
    "С шоколадом",
    "С орехами",
    "Фруктовые",
    "Ассорти",
    "Рожок",
];

$slivPrice = [
    "89 сом",
    "99 сом",
    "99 сом",
    "119 сом",
    "139 сом",
    "79 сом",
];


$sliv2 = array(
    "Сливочное",
    "С шоколадом",
    "С орехами",
    "Фруктовые",
    "Ассорти",
    "Рожок",
);
$dessert = array(
    "Бельгия",
    "Стамбул",
    "Нью-Йорк",
    "Лондон",
    "Италия",
    "Сет <<Романтик>>",
)





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dessertino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body class="container" style="background: lavender;">
    <div class="header container">
        <div class="header_logo">
            <center>
                <img class="menu" src="logo.png" style="width:25%" alt="">
            </center>
        </div>

    </div>
    <div class="header_menu">
        <ul style="display: flex; justify-content:space-around;
     list-style:none; padding:0;margin:10px 0">
            <li><a style="text-decoration:none;color:red; font-size:large" href="./index.php">Мороженное</a></li>
            <li><a style="text-decoration:none;color:red; font-size:large" href="./belgian.php">Бельгийские</a></li>
            <!-- <li><a style="text-decoration:none;color:red; font-size:20px"  href="">Коктейль</a></li> -->
        </ul>
    </div>
    <div class="">
        <div class="containe ">
            <div class="row">

                <?php
                $i = 0;
                foreach ($sliv as $value) :
                    $i++;
                ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 " style="margin: 5px 0;">

                        <div class="item_block" style="background:rgb(252, 175, 226); border-radius:20px; box-shadow: 1 5; padding:5px">
                            <div class="">
                                <img class="header_logo_png" style="width:100%" src="soboy<?php echo $i ?>.png" alt="">
                            </div>
                            <p class="item_title" style="font-size:large;text-align:center; color:black;margin:0"><?php echo $sliv[$i - 1]; ?></p>
                            <p class="item_price" style="font-size: medium; text-align:center; margin:0"><?php echo $slivPrice[$i - 1]; ?></p>
                        </div>
                    </div>
                <?php
                endforeach; ?>
            </div>
        </div>
    </div>









    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>
