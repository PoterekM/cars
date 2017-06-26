<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Make a rectangle!</title>
</head>
<body>
    <div class="container">
    <?php
        if ($my_rectangle->isSquare()) {
            echo "<h1>Congratulations! You made a square!</h1>";
        } else {
            echo "<h1>Sorry! This isn't a square.</h1>";
        }
    ?>
    </div>
</body>
</html>
