<?php

// accepting form variable via post request
 if($_SERVER['REQUEST_METHOD']=='POST'){
      $amount = $_POST['amount'];
      $rate   = $_POST['rate'];
      $installments = $_POST['installments']; 
}

// if all good processing start
  if(!empty($amount) && !empty($rate) && !empty($installments)){

  	$dayTime = date('D H:i');
  	//$dayTime = "Fri 19:30";  //just for testing of if its friday and particular time between 15 to 20
  	$day = explode(" ", $dayTime);  // to get the day from datetime string
  	$time = explode(":", $day[1]);  // to get specific hours from time string
  //	var_dump($day[0]);die();

    // to check if its for special condition for base premium for 13%  
      if(($day[0] == "Fri") && (($time[0] >= 15) && ($time[0] <= 20))){ 
          
         $basePremiumfigure = 0.13;
         $commissionfigure  = 0.17;
         $taxfigure         = $rate /100;
         
         $basePremium = $amount * $basePremiumfigure;
         $commission  = $basePremium * $commissionfigure;
         $tax   = $basePremium * $taxfigure;
         $totalCost   = $basePremium + $commission + $tax;

       // calculating installments
           if ($installments > 1) {
           	
           	 $installmentBasePremium = $basePremium / $installments;
           	 $installmentcommission  = $commission / $installments;
           	 $installmenttax         = $tax / $installments;
           	 $installmenttotalCost   = $totalCost / $installments;
           }
           

      }else{
       
         $basePremiumfigure = 0.11;
         $commissionfigure  = 0.17;
         $taxfigure         = $rate /100;
         
         $basePremium = $amount * $basePremiumfigure;
         $commission  = $basePremium * $commissionfigure;
         $tax   = $basePremium * $taxfigure;
         $totalCost   = $basePremium + $commission + $tax;

            // calculating installments
           if ($installments > 1) {
           	
           	 $installmentBasePremium = $basePremium / $installments;
           	 $installmentcommission  = $commission / $installments;
           	 $installmenttax         = $tax / $installments;
           	 $installmenttotalCost   = $totalCost / $installments;
           }
      }

      
  }

?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">


<div class="container">
      <div class="price-box">
      	 <a href="/insly/insurance/insurance.php"><center><h3>Car Insurance Calculator</h3></center></a>
        <div class="row">
        	<div class="col-sm-12">

                 <form class="form-horizontal form-pricing" role="form" action="calculate.php" method="Post">

		        	  <div class="price-slider">	
		        		 <h4 class="great">Value</h4>

		        		    <div class="col-sm-12">
			                     <div class="form-group">
			                      <input type="text" value="<?php echo $amount; ?>" readonly>
			                     </div>
		                    </div>

		        		     
		        	  </div>	              

              <div class="price-slider">	
                    <h4 class="great">Base Premium (<?php echo $basePremiumfigure*100; ?>%)</h4>

                          <div class="col-sm-12">
			                     <div class="form-group">
			                      <input type="text" value="<?php echo $basePremium; ?>" readonly>
			                     </div>
		                    </div>
                            
              </div>               
              
              <div class="price-slider">
                    <h4 class="great">Commission (17%)</h4>

                     <div class="col-sm-12">
			                     <div class="form-group">
			                      <input type="text" value="<?php echo $commission; ?>" readonly>
			                     </div>
		                    </div>
                              
              </div> 

              <div class="price-slider">               
                    <h4 class="great">Tax (<?php echo $rate; ?>%)</h4>

                         <div class="col-sm-12">
			                     <div class="form-group">
			                      <input type="text" value="<?php echo $tax; ?>" readonly>
			                     </div>
		                    </div>
                             
              </div>                

               <div class="price-slider"> 
                    <h4 class="great">Total Amount</h4>

                        <div class="col-sm-12">
			                     <div class="form-group">
			                      <input type="text" value="<?php echo $totalCost; ?>" readonly>
			                     </div>
		                    </div>
                               
               </div>


                 <table class="table">
					    <thead>

					      <tr>
					      	<?php $i = 1; 
					      	    while($i <= $installments){
					      	 ?>
					        <th>installment<?php echo $i; ?> </th>
					        <th>Base Premium</th>
					        <th>Commission</th>
					        <th>Tax</th>
					        <th>Total Coast</th>
					        <?php $i++; ?>
					      </tr>
					    </thead>
					    <tbody>
					    	<tr>
                           <td></td>
					      <?php echo "<td>". number_format($installmentBasePremium,2)."</td>"; ?>
					      <?php echo "<td>". number_format($installmentcommission,2)."</td>"; ?>
					      <?php echo "<td>". number_format($installmenttax,2)."</td>"; ?>
					      <?php echo "<td>". number_format($installmenttotalCost,2)."</td>"; ?>
					         </tr>
					     <?php } ?>
					    </tbody>
				</table>	

                 </form>	

        </div>
      </div>
</div> 

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <!--<script src="main.js"></script>-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>        	