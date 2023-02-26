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
    "Париж",
    "Сет <<Романтик>>",
);
$slivPrice = [
    "299 сом",
    "349 сом",
    "399 сом",
    "449 сом",
    "499 сом",
    "549 сом",
    "699 сом",
];






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

<body class="container" style="background: black;">
    <div class="header container">
        <div class="header_logo">
            <center>
                <img class="menu" src="inshot/logo.png" style="width:25%" alt="">
            </center>
        </div>

    </div>
    <div class="header_menu">
        <ul class="row" style="display: flex; justify-content:space-around;
     list-style:none; padding:0; margin:10px 0;">
            <li class="col-6 justify-content-center"><a style="text-decoration:none;color:red; align-items:center; font-size:20px" href="./index.php">Мороженное</a></li>
            <li class="col-6 d-flex justify-content-center"><a style="text-decoration:none;color:red; font-size:20px" href="./belgian.php">Бельгийские</a></li>
            <!-- <li><a style="text-decoration:none;" href="">Коктейль</a></li> -->
        </ul>
    </div>
    <div class="section container">
        <div class="row ">

            <?php
            $i = 0;
            foreach ($dessert as $value) :
                $i++;
            ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12 " style="margin: 5px 0;">
                    <div style="background: rgb(0, 0, 0);
            border:rgb(240, 176, 38) 1px solid;
            border: radius 20px;
            box-shadow: 0,0,5,5">

                        <div class="container ">
                            <img class="header_logo_png" style="width:100%" src="inshot/belg<?php echo $i ?>.png" alt="">
                        </div>
                        <p class="item_title" style="font-size:30px;
                    text-align:center;
                    font-weight:bold;
                    
   
   font-family: 'Times New Roman',serif;
   letter-spacing: 5px;
   
   font-weight: bold;
   background-image: linear-gradient(
	to right,
	#462523 0,
       	#cb9b51 22%, 
	#f6e27a 45%,
	#f6f2c0 50%,
	#f6e27a 55%,
	#cb9b51 78%,
	#462523 100%
	);
   color:transparent;
   -webkit-background-clip:text;"><?php echo $dessert[$i - 1]; ?></p>
                        <p class="item_price" style="font-size: 20px; text-align:center;
                  font-family: 'Times New Roman',serif;
   letter-spacing: 5px;
   
   font-weight: bold;
   background-image: linear-gradient(
	to right,
	#462523 0,
       	#cb9b51 22%, 
	#f6e27a 45%,
	#f6f2c0 50%,
	#f6e27a 55%,
	#cb9b51 78%,
	#462523 100%
	);
   color:transparent;
   -webkit-background-clip:text;"><?php echo $slivPrice[$i - 1]; ?></p>
                    </div>
                </div>
            <?php
            endforeach; ?>
        </div>
    </div>









    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>