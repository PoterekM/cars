<?php

    class Car
    {
        public $make_model;
        public $price;
        public $image_path;
        public $miles;
    }

function __construct($make_model, $price, $image_path, $miles)
{
      $this->model = $make_model;
      $this->price = $price;
      $this->image = $image_path;
      $this->miles = $miles;
}
      $first_car = new Car("accord", "$700", "image", "165,098");
      $second_car = new Car("volvo", "$1200", "image", "198,345");
      $third_car = new Car("vw", "$350", "image", "199,097");

$cars = array($porsche, $ford, $lexus, $mercedes);

$cars_matching_search = array();
foreach ($cars as $car) {
if ($car->price < $_GET["price"]) {
array_push($cars_matching_search, $car);
}
   


?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Buy a car</title>
</head>
<body>
    <div class="container">
    <?php
        foreach ($cars_matching_search as $car) {
            echo "<li> $car->make_model </li>";
            echo "<ul>";
                echo "<li> $$car->price </li>";
                echo "<li> Miles: $car->miles </li>";
            echo "</ul>";
          }
    ?>
    </div>
</body>
</html>
