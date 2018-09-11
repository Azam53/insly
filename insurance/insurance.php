<?php
class Insurance 
{


  public function index()
  {
     include 'views/index.php';
  }

}

// Calling the index function for landing page to start 
$in = new Insurance;
$in->index();


?>