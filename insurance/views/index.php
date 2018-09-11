<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="style.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="price-box">
         <a href="/insly/insurance/insurance.php"><center><h3>Car Insurance Calculator</h3></center></a>
        <div class="row">
          <div class="col-sm-12">
                <form class="form-horizontal form-pricing" role="form" action="calculate.php" method="Post">

                  <div class="price-slider">
                    <h4 class="great">Amount</h4>
                    <span>Choose amount between min 100 &euro; - max 100K &euro; is required</span>
                    <div class="col-sm-12">
                     <!-- <div id="slider_amirol"></div>-->
                     <div class="form-group">
                       <input type="text" name="amount" data-validation="number" data-validation-allowing="range[100;100000]" class="form-control" id="amount">
                     </div>
                    </div>
                  </div>

                  <div class="price-slider">
                    <h4 class="great">Tax Rate %</h4>
                    <span>Please mention 1 - 100 value</span>
                    <div class="col-sm-12">
                     <!-- <div id="slider_rate"></div>-->
                     <div class="form-group">
                        <input type="text" name="rate" data-validation="number" data-validation-allowing="range[1;100]" class="form-control" id="rate" >
                     </div>
                    </div>
                  </div>

                  <div class="price-slider">
                    <h4 class="great">No of Installments</h4>
                    <span>Please choose one</span>
                    <div class="form-group">
                            <select class="form-control" id="installments" data-validation="required" name="installments">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                              <option>6</option>
                              <option>7</option>
                              <option>8</option>
                              <option>9</option>
                              <option>10</option>
                              <option>11</option>
                              <option>12</option>
                            </select>
                     </div> 
                  </div>

                  <div class="form-group">
                      <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Calculate <span class="glyphicon glyphicon-chevron-right"></span></button>
                      </div>
                  </div>
                </form> 
              </div>

                
            </div>
            
        </div>

         

  </div>


    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>  
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <!--<script src="main.js"></script>-->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
     $.validate({
         decimalSeparator : ','
     });
</script>