<?php
    class Vierkant{
        public $oppervlakteVierkant;
        protected $x;


     function __construct($X) {
            $this->x =  $X;
            $this->oppervlakteVierkant = $X * $X;
    }


};
?>

