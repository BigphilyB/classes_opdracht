
<?php
class Cars {
 public $brand;
 public $type;
 public function __construct($brand, $type) {
   $this->brand = $brand;
   $this->type = $type;
 }
 public function intro() {
   echo "The brand is {$this->brand} and the type is {$this->type}.";
 }
}

// Strawberry is inherited from Fruit
class Porsche extends Cars {
    
 public function message() {
   echo "What brand am I?";
 }
}
$Porsche = new Porsche("Porsche", "Sports car");
$Porsche->message();
$Porsche->intro();
?>











