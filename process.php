<?php
    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDao = new CarDAO($conn);

    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["cor"];

    $car = new Car();
    
    $car->setBrand($brand);
    $car->setKm($km);
    $car->setColor($color);

    $carDao->create($car);

    header("Location: index.php");