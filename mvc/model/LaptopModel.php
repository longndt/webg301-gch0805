<?php
require_once "model\Laptop.php";

class LaptopModel {
   public function getLaptopList() {
      //create an array of Laptop as sample DB
      $laptopList = array (
         //set index similar to laptop name for easy access
         "Dell XPS 13" => new Laptop("Dell XPS 13", "Dell", 1200.43, "Silver"),
         "Macbook Air M1" => new Laptop("Macbook Air M1", "Apple", 1100.32, "Silver"),
         "LG Gram 15" => new Laptop("LG Gram 15", "LG", 1243.12, "White")
      );
      return $laptopList;
   }

   public function getLaptopDetail($name) {
      $laptopList = $this->getLaptopList();
      return $laptopList[$name];
   }
}
?>