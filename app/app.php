<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/car.php";

    $app = new Silex\Application();

    $app->get("/", function() {
        return "<!DOCTYPE html>
        <html>
        <head>
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>
            <link rel='stylesheet' href='css/styles.css'>
            <title>Monster Vans</title>
        </head>
        <body id='lemon'>
            <div class='container'>
                <h1>What kind of lemon you want?</h1>

                <form action='/car'>
                    <div class='form-group'>
                      <label for='price'>How much money you got?</label>
                      <input id='price' name='price' class='form-control' type='number'>
                      <label for='miles'>Max miles</label>
                      <input id='miles' name='miles' class='form-control' type='number'>
                    </div>
                    <button  type='submit' class='btn-success'>BUY NOW!</button>
                </form>
            </div>
        </body>
        </html>";
    });

    $app->get("/car", function() {
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
        if (empty($cars_matching_search)) {
            echo "<body id='feet'>Please start walking</body>";
            // echo "<img src=img/walk.jpg>";
        }

        foreach ($cars_matching_search as $car) {
            $newMiles = $car->getMiles();
            $newPrice = $car->getPrice();
            echo '<img src='. $car->image .'>';
            echo '<ul>';
                echo '<li>'. $car->model .'</li>';
                echo '<li> $'. $newPrice .'</li>';
                echo '<li> Miles:'. $newMiles .'</li>';
            echo '</ul>';
          }
          return false;
    });

    return $app;
?>
