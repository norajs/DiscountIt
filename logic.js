
            
            
           
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
            
            
            
            //toggle finance button that enables/disables Month radio buttons
            document.getElementById("finance").onclick = function allow() {
                     if (document.getElementById("finance").classList.contains("active") == false){
                        document.getElementById("finance").classList.add("active");
                       document.getElementById("months").disabled = false; 
                     } 
                     else {
                        document.getElementById("finance").classList.remove("active");
                        document.getElementById("months").disabled = true;
                    }
                  
                }
            
            
            
            
         
           
            //Submitting the form
            document.getElementById("submit").onclick = function calculate() {
                
                //getting value of list price input field
                var listPrice = document.getElementById("listPrice").value;
                //storing value of list price input field into  local storage
                localStorage.setItem("listPrice", JSON.stringify(listPrice));
                
                //getting value of current price input field
                var currentPrice = document.getElementById("currentPrice").value;
                //storing value of current price input field into local storage
                localStorage.setItem("currentPrice", JSON.stringify(currentPrice));
                
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
                //storing value of gallery discount field into local storage
                localStorage.setItem("galleryDiscount", JSON.stringify(galleryDiscount));
                
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
                //storing value of consultant discount field into local storage
                localStorage.setItem("consultantDiscount", JSON.stringify(consultantDiscount));
                
                
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
                
                
                //getting value of months
                
                //initializing array to loop through radio buttons
                if (document.getElementById("finance").classList.contains("active") == true) {
                    var discount = document.getElementsByName('months');
                    var months = 0;
                    for(var i = 0; i < discount.length; i++){
                    if (discount[i].checked){
                        months = discount[i].value;
                    }
                    
                }
                    
                }
                else {
                    months = 0;
                }
                
               
              alert(listPrice + '\n' + currentPrice + '\n' + galleryDiscount + '\n' + consultantDiscount + '\n' + downPayment + '\n' + months);
                
            location.href = "http://localhost/discountit/calc.php";
                
                
            }
            
            
       