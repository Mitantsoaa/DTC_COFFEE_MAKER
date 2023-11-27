<?php
    class water
    {
        public float $volume;

        public function getVolume()
        {
            return $this->volume;
        }

        public function setVolume($volume)
        {
            if($volume > 0 && $volume <= 5){
                $this->volume = $volume;

                return $this;
            }else{
                throw new Exception("Trop d'eau");
            }
        }
    }