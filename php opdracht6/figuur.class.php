

<?php
    class Driehoek{
        public $oppervlakteDriehoek;
        protected $H;
        protected $B;

     function __construct( $H, $B) {
        $this->h =  $H;
        $this->b =  $B;

            $this->oppervlakteDriehoek = $this->H * $this->B / 2;
        // $oppervlakte = $x * $x;
    }


};
?>


