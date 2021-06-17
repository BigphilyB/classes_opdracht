<?php
class Cars {
 protected $brand;
 private $cost;
 public $type;

 public function __construct($brand, $type) {
   $this->brand =  $brand;
   $this->type = $type;
   $this->cost = $cost;
 }
 public function intro() {
   echo "The brand is {$this->brand} and the type is {$this->type}. and it costs {$this->cost} €";
 }
}

// Strawberry is inherited from Fruit
class Porsche extends Cars {
    
 public function message() {
   echo "What brand am I?";
 }
}
$Porsche = new Porsche("Porsche", "Sports car", 100.000);
$Porsche->message();
$Porsche->intro();


?>
