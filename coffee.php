<?php
    class coffee
    {
        public float $quantity;

        public function getQuantity()
        {
            return $this->quantity;
        }

        public function setQuantity($q)
        {
            if($q > 0 && $q <= 2){
                $this->quantity = $q;

                return $this;
            }else{
                throw new Exception('Trop de café');
            }
        }
    }