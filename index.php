<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

      
    </head>
    <body>
        
        <div class="container">
            
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
                        <button type="button" class="btn btn-secondary" data-toggle="button" aria-pressed="false" autocomplete="off">Finance
                        </button>
                    </div>
                
                    <fieldset id="months">  
                        <label class="title">Month</label>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios3" id="optionsRadios1" value="option1" checked>
                            12
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label ">
                            <input type="radio" class="form-check-input" name="optionsRadios3" id="optionsRadios2" value="option2">
                            18
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios3" id="optionsRadios2" value="option2">
                            24
                          </label>
                        </div>

                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios3" id="optionsRadios2" value="option2">
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
 
        
        
        <script>
            
            //making sure clicking on input fields automatically checks the corresponding radiobutton
            
            //Gallery discount field
            
            document.getElementById("galleryDiscountInput").onfocus = function(){
                document.getElementById("customcheckbox1").checked = true;
             
            }
            
            //consultant dicount field
            document.getElementById("consultantInputDiscount").onfocus = function(){
                document.getElementById("customcheckbox2").checked = true;
             
            }
            
            //down payment field
            document.getElementById("downPaymentInput").onfocus = function(){
                document.getElementById("customcheckbox3").checked = true;
             
            }
            
            
            
            
            
            
            
           
            //Submitting the form
            document.getElementById("submit").onclick = function calculate() {
                
                //getting value of list price input field
                var listPrice = document.getElementById("listPrice").value;
                
                //getting value of current price input field
                var currentPrice = document.getElementById("currentPrice").value;
                
                //getting value of gallery discount field
                
                //initializing array to loop through radio buttons
                var discount = document.getElementsByName('galleryDiscount');
                var galleryDiscount = 0;
                for(var i = 0; i < discount.length; i++){
                    if (discount[i].checked){
                        galleryDiscount = discount[i].value;
                    }
                    //getting custom input
                    if (discount[3].checked){
                        galleryDiscount = galleryDiscount + document.getElementById('galleryDiscountInput').value;
                    }
                }
                
                //getting value of consultant discount field
                
                //initializing array to loop through radio buttons
                var discount = document.getElementsByName('consultantDiscount');
                var consultantDiscount = 0;
                for(var i = 0; i < discount.length; i++){
                    if (discount[i].checked){
                        consultantDiscount = discount[i].value;
                    }
                    
                    //getting custom input
                    if (discount[3].checked){
                        consultantDiscount = consultantDiscount + document.getElementById('consultantInputDiscount').value;
                    }
                }
                
                
                //getting value of down payment field
                
                //initializing array to loop through radio buttons
                var discount = document.getElementsByName('downPayment');
                
                var downPayment = 0;
                for(var i = 0; i < discount.length; i++){
                    if (discount[i].checked){
                        downPayment = discount[i].value;
                    }
                    
                    //getting custom input
                    if (discount[2].checked){
                        downPayment = downPayment + document.getElementById('downPaymentInput').value;
                    }
                }
                
                
               
                
                
                
                
                
                
                var finance = document.getElementById("currentPrice").value;
                
                var month = document.getElementById("currentPrice").value;
                
              alert(listPrice + '\n' + currentPrice + '\n' + galleryDiscount + '\n' + consultantDiscount + '\n' + downPayment );
                
             
                
                
                
                
            }
            
            
            
        </script>
        
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>