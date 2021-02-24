<?php  require 'header.php'; ?>
<main>
<div class="jumbotron">
    <div class="py-1">
        <h2 class="text-center display-4">Online Payment</h2>
    </div>

</div>

<section class="my-5">
    
    <div class="w-50 m-auto">
    <form action="" method="post"> 

    <div class="py-3">
        <h3 >Payment Information</h3>
    </div>


      
        <div class="form-group">
                <label>Service selected:</label>
                <select class="form-control" id="services" name="customers" required="required" onchange="showCustomer(this.value)" >
                    <option value="">Select the service </option>
                    <option class="form-control" value="Computer Repair">Computer Repair</option>
                    <option  class="form-control" value="Tablet Repair">Tablet Repair</option>
                    <option class="form-control" value="Laptop Repair">Laptop Repair</option>
                    <option class="form-control" value="Business IT Support">Business IT Support</option>
                    <option class="form-control" value="Online Support">Online Support</option>
                    <option class="form-control" value="Virus Removal">Virus Removal</option>
                    <option class="form-control" value="Windows Update">Windows Update</option>
                    <option class="form-control" value="IPhone Repair">IPhone Repair</option>
                    <option class="form-control" value="Smartphone Repair">Smartphone Repair</option>
                    <option class="form-control" value="IPod Repair">IPod Repair</option>
                    <option class="form-control" value="Android Repair">Android Repair</option>
                </select>  
            </div> 

        <div class="form-group">
        <label>Payment Amount:</label>

        <div id="txtHint"></div>

        </div>

    <div class="py-3">
        <h3 >Credit Card Information</h3>
    </div>
        
            <div class="form-group">
                <label>Cardholder:</label>
                <input type="text" name="name" id="Name" autocomplete="off" class="form-control" required="required" placeholder="">
            </div>  
            
             
            <div class="form-group">
                <label>Card Number:</label>
                <input type="tel" name="cnum" id="cnum" autocomplete="off" class="form-control" required="required" placeholder="XXXX XXXX XXXX XXXX"  pattern="[0-9]{4} [0-9]{4} [0-9]{4} [0-9]{4}">
                
            </div> 

            <div class="form-group">
                <label>Expires:</label>
                <select class="form-control" id="month" name="month" required="required"  >
                    <option class="form-control" value="">MM</option>
                    <option class="form-control" value="01">01</option>
                    <option  class="form-control" value="02">02</option>
                    <option class="form-control" value="03">03</option>
                    <option class="form-control" value="04">04</option>
                    <option class="form-control" value="05">05</option>
                    <option class="form-control" value="06">06</option>
                    <option class="form-control" value="07">07</option>
                    <option class="form-control" value="08">08</option>
                    <option class="form-control" value="09">09</option>
                    <option class="form-control" value="10">10</option>
                    <option class="form-control" value="11">11</option>
                    <option class="form-control" value="12">12</option>

                </select>  
                <select class="form-control" id="year" name="year" required="required"  >
                    <option class="form-control" value="">YY</option>
                    <option class="form-control" value="20">20</option>
                    <option  class="form-control" value="21">21</option>
                    <option class="form-control" value="22">22</option>
                    <option class="form-control" value="23">23</option>
                    <option class="form-control" value="24">24</option>
                    <option class="form-control" value="25">25</option>
                    <option class="form-control" value="26">26</option>
                    <option class="form-control" value="27">27</option>
                    <option class="form-control" value="28">28</option>
                    <option class="form-control" value="29">29</option>
                    <option class="form-control" value="30">30</option>

                </select>  
            </div> 

            
            <div class="form-group">
                <label>Card security code(CVV):</label>
                <input type="tel" name="cvv" id="cvv" autocomplete="off" class="form-control" required="required" placeholder="XXX" pattern="[0-9]{3}" >
            </div> 
            
            
            <button type="submit" class="btn btn-primary" onclick="validation();">Pay</button> 

                       
        </form>
    </div>

</section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="jquery/jquery.js"></script>
<script src="jquery/jquery.datetimepicker.full.min.js"></script>


<script>
  function showCustomer(str) {
  var xhttp;
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getcustomer.php?q="+str, true);
  xhttp.send();
  }
</script>

<script>
    function validation()
    {

        var Name1 = document.getElementById('Name').value;
        var Cnum = document.getElementById('cnum').value;
        var Month = document.getElementById('month').value;
        var Year = document.getElementById('year').value;
        var Cvv = document.getElementById('cvv').value;
        var Services = document.getElementById('services').value;

        if((Name1 !=="") && (Cnum !=="") && (Month !=="") && (Year !=="") && (Cvv !=="") && (Services !=="") ){
            swal("Good job!", "Payment successful!", "success");        }
    }


</script>

<?php  require 'footer.php'; ?>























