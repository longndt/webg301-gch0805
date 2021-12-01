<?php 
require_once "model\LaptopModel.php";

class LaptopController {
   public $model;
   
   public function __construct()
   {
      $this->model = new LaptopModel();
   }

   public function viewLaptop() {
      //case 1: view all laptops
      if (!isset($_GET['name'])) {
         //get data from model
         $laptops = $this->model->getLaptopList();
         //render view
         require_once "view\LaptopList.php";
      }
      //case 2: view detail of 1 laptop
      else {
         //get data from model
         $laptop = $this->model->getLaptopDetail($_GET['name']);
         //render view
         require_once "view\LaptopDetail.php";
      }
   }
}
?>