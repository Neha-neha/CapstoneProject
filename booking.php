<?php  require 'header.php'; ?>
<main>
<div class="jumbotron">
    <div class="py-1 text-center">
        <h2 class="text-center display-4">Book An Appointment</h2>
        <h4><a class="" href="payment.php">Online Payment</a></h4>
    </div>

</div>

<section class="my-5">
    
    <div class="w-50 m-auto">
        <form action="bookinginfo.php" method="post">
        
            <div class="py-3">
                <h2 class="text-center">Booking Form</h2>
            </div>

            <div class="form-group">
                <label>Full Name</label>
                <input type="text" name="name" id="Name" autocomplete="off" class="form-control" required="required" placeholder="Albert Wayne">
            </div>  
            
             
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" id="Email" autocomplete="off" class="form-control" required="required" placeholder="albert@gmail.com">
            </div>  
            <div class="form-group">
                <label>Phone Number</label>
                <input type="tel" name="mobile" id="Mobile" autocomplete="off" class="form-control" required="required" placeholder="1234656278"  pattern="[0-9]{10}">
                
            </div> 
            
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" id="Address" autocomplete="off" class="form-control" required="required" >
            </div> 
            <div class="form-group">
                <label>Service</label>
                <select class="form-control" id="services" name="service" required="required"  >
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
                <label>Date</label>
                <input type="text" id="datepicker"  name="date"  autocomplete="off" class="form-control" required="required" placeholder="dd-mm-yy">
            </div> 

            <div class="form-group">
                <label>Time</label>
                <input type="text" id="timepicker"  name="time"   autocomplete="off" class="form-control" required="required" placeholder="00:00 am/pm" >
                
            </div> 
            
            
            <button type="submit" class="btn btn-primary" onclick="validation();">Submit</button> 

                       
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

jQuery('#datepicker').datetimepicker({
 timepicker:false,
 theme: 'dark',
 format:'d-m-Y',
 minDate: 0,
});
      
jQuery('#timepicker').datetimepicker({
  datepicker:false,
  theme: 'dark',
  format:'H:i A',
  minTime: '10:00',
  maxTime: '16:15',
  step: 30
  
});

</script>

<script>
    function validation()
    {
        var Name1 = document.getElementById('Name').value;
        var Email1 = document.getElementById('Email').value;
        var Mobile1 = document.getElementById('Mobile').value;
        var Address1 = document.getElementById('Address').value;
        var Services = document.getElementById('services').value;
        var Date = document.getElementById('datepicker').value;
        var Time = document.getElementById('timepicker').value;

        if((Name1 !=="") && (Email1 !=="") && (Mobile1 !=="") && (Address1 !=="") && (Services !=="") && (Date !=="") && (Time !=="") ){
            swal( "APPOINTMENT BOOKED !");
        }
    }


</script>

<?php  require 'footer.php'; ?>