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

?>
