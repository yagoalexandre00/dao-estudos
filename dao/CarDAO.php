<?php

    include_once("models/Car.php");

    class CarDAO implements CarDAOInterface {
        private $conn;

        public function __construct(PDO $conn){
            $this->conn = $conn; 
        }

        public function create (Car $car) {
            $query = "INSERT INTO cars (brand, km, color) VALUES (:brand, :km, :color)"; 
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(":brand", $car->getBrand());
            $stmt->bindParam(":km", $car->getKm());
            $stmt->bindParam(":color", $car->getColor());

            $stmt->execute();
        }

        public function findAll (){
            $query = "SELECT * FROM cars";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $listOfCars = $stmt->fetchAll();

        }
    }
