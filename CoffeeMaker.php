<?php
    require 'autoload.php';

    class CoffeeMaker
    {
        public string $water;
        public string $coffee;
        public bool $isStarted;


        public function startCoffee()
        {
            $this->isStarted = true;

            return $this;
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


    }