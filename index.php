<?php
function _construct($make_model, $price, $image_path, $miles);
{
      $this->model = $make_model;
      $this->price = $price;
      $this->image = $image_path;
      $this->miles = $miles;
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
    ?>
    </div>
</body>
</html>
