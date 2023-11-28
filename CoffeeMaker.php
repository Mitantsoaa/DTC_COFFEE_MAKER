<?php
    require 'autoload.php';

    class CoffeeMaker
    {
        public float $water;
        public float $coffee;
        public bool $isStarted;


        public function startCoffee()
        {
            if($this->getWater() > 0 && $this->getCoffee() > 0){
                $this->isStarted = true;

                return $this;
            }else{
                throw new Exception('Ajouter les ingredients');
            }
        }

        public function putOff()
        {
            $this->isStarted = false;

            return $this;
        }

        public function prepare(water $water,coffee $coffee)
        {
            if($isStarted === true){
                $water->setVolume($water->getVolume() - $this->water);
                $coffee->setQuantity($coffee->getQuantity() - $this->coffee);
                $expresso = $water->getVolume() + $coffee->getQuantity();
                $this->putOff();

                return 'Voici votre café'.$expresso;
            }else{
                throw new Exception('Allumer la caffetière');
            }
        }

        public function addWater(float $waterV)
        {
            $this->water = $waterV;

            return $this;
        }

        public function addCoffee(float $coffee)
        {
            $this->coffee = $coffee;

            return $this;
        }

        public function getWater()
        {
            return $this->water;
        }

        public function getCoffee()
        {
            return $this->coffee;
        }

    }

    $cafe = new CoffeeMaker();
    $cafe->addWater(2);
    $cafe->addCoffee(2);
    $cafe->startCoffee();
    $water =  new water();
    $coffee = new coffee();
    $cafe->prepare($water->setVolume(5),$coffee->setQuantity(2));
