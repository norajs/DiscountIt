<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">
        
        <script src="jquery.js"></script>
      
    </head>
    <body>
        
        
        
        

        <div class="container ">
            
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="title" for="listPrice">List Price</label> 
                        <input type="text" class="form-control inputPrice" id="listPrice"> 
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-group">
                        <label class="title" for="currentPrice">Current Price</label> 
                        <input type="text" class="form-control inputPrice" id="currentPrice"> 
                    </div>
                </div>
            </div>
                
                
                
                
           
            <div class="row">
                <div class="col">
                    <fieldset id="galleryDiscount">  
                        <label class="title">Gallery Discount</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="galleryDiscount"  value="5">
                            5%
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label ">
                            <input type="radio" class="form-check-input" name="galleryDiscount"  value="10">
                            10%
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="galleryDiscount"  value="15">
                            15%
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="galleryDiscount"
                            id="customcheckbox1" value=""> 
                            <input type="text" class="form-control inputPercentage" name="other1" id="galleryDiscountInput"> 
                            
                            
                              
                              
                              
                          </label>
                        </div>
                    </fieldset>
                </div>
                
                <div class="col">
                    <fieldset id="consultantDiscount">  
                        <label class="title">Consultant Discount</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="consultantDiscount" value="5">
                            5%
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label ">
                            <input type="radio" class="form-check-input" name="consultantDiscount" value="10">
                            10%
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="consultantDiscount" value="15">
                            15%
                          </label>
                        </div>

                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="consultantDiscount"
                            id="customcheckbox2"
                            value="">
                            <input type="text" class="form-control inputPercentage" name="other2" id="consultantInputDiscount"> 
                          </label>
                        </div>
                    </fieldset>
                </div>
              
            </div>
            
            
                
            <div class="row">
                <div class="col">
                    <fieldset id="downPayment">  
                        <label class="title">Down payment</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="downPayment"  value="35">
                            35%
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label ">
                            <input type="radio" class="form-check-input" name="downPayment"  value="50">
                            50%
                          </label>
                        </div>

                        
                        <div class="form-check">
                          <label class="form-check-label">
                              
                            <input type="radio" class="form-check-input" name="downPayment" id="customcheckbox3" value="" >
                              
                            <input type="text" class="form-control inputPercentage" id="downPaymentInput"> 
                              
                          </label>
                        </div>
                    </fieldset>
                </div>
                <div class="col">
                    <div>
                        <button type="button" id="finance" class="btn btn-secondary">Finance
                        </button>
                    </div>
                
                    <fieldset id="months" disabled>  
                        <label class="title">Month</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="months" value="12" >
                            12
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label ">
                            <input type="radio" class="form-check-input" name="months" value="18">
                            18
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="months" value="24">
                            24
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="months" value="36">
                            36
                          </label>
                        </div>
                    </fieldset>
                </div>    
            </div>
            
            <div class="row">
                <div class="col text-center">
                    <button id="submit" type="button" class="btn btn-primary btn-lg">Submit</button>
                </div>
            
            </div>
            
            
  
                
              
           
        
        </div>
 
        
        
        <script src="logic.js"></script>
        
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>