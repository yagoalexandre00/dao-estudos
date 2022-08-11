<?php

    class Car {
        
        private $id;
        private $brand;
        private $km;
        private $color;
        
        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }

        public function setBrand($brand){
            $this->brand = $brand;
        }
        
        public function getBrand(){
            return $this->brand;
        }
        
        public function setKm($km){
            $this->km = intval($km);
        }

        public function getKm(){
            return $this->km;
        }
        
        public function setColor($color){
            $this->color = $color;
        }

        public function getColor(){
            return $this->color;
        }
    }

    interface CarDAOInterface {
        public function create(Car $car);
        public function findAll();
    }