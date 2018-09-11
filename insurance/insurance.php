<?php
class Insurance 
{
  // // only accessible *inside* of the class
  // public $amount,$rate,$installments;

  // // accessible *outside* of the class
  // public  $basePremiumfigure ;
  // public  $commissionfigure;
  // public  $taxfigure;
  // public  $basePremium,$commission,$tax,$totalCost;
  // public  $installmentBasePremium, $installmentcommission ,$installmenttax,$installmenttotalCost;

  public function index()
  {
     include 'views/index.php';
  }

  
}

// Calling the index function for landing page to start 
$in = new Insurance;
$in->index();


?>