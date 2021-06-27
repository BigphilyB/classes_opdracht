















<?php



    class Driehoek{
        public $oppervlakteDriehoek;
        protected $H;
        protected $B;

    public function __construct( $H, $B) {
        $this->h =  $H;
        $this->b =  $B;

            $this->oppervlakteDriehoek = $H * $B / 2;
    }


};
?>

