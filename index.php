<?php

    class Car
    {
        private $make_model;
        private $price;
        private $image_path;
        private $miles;

    function __construct($make_model, $price, $image_path, $miles)
    {
        $this->model = $make_model;
        $this->price = $price;
        $this->image = $image_path;
        $this->miles = $miles;

      }

    function getMake_model()
    {
        return $this->make_model;
    }
    function getPrice()
    {
        return $this->price;
    }
    function getImage()
    {
        return $this->image;
    }
    function getMiles()
    {
        return $this->miles;
    }

}

    $first_car = new Car("accord", 700, "img/accord.jpeg", 165000);
    $second_car = new Car("volvo", 1200, "img/volvo.jpeg", 198000);
    $third_car = new Car("vw", 350, "img/vw_büs.jpg", 199000);
    $fourth_car = new Car("gremlin", 125, "img/gremlin.jpg", 299000);
    $fifth_car = new Car("datsun", 900, "img/datsun.jpg", 289000);
    $sixth_car = new Car("pinto", 600, "img/pinto.jpg", 450000);
$cars = array($first_car, $second_car, $third_car, $fourth_car, $fifth_car, $sixth_car);

$cars_matching_search = array();
    foreach ($cars as $car) {
        if (($car->getPrice() <= $_GET["price"]) && ($car->getMiles() <= $_GET["miles"])) {
        array_push($cars_matching_search, $car);
        }
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
            $newMiles = $car->getMiles();
            $newPrice = $car->getPrice();
          echo "<img src=$car->image>";
            echo "<li> $car->model </li>";
            echo "<ul>";
                echo "<li> $$newPrice </li>";
                echo "<li> Miles: $newMiles </li>";
            echo "</ul>";
          }
    ?>
    </div>
</body>
</html>
