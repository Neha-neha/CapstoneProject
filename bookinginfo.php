<?php  require 'header.php'; ?>
<main>
<div class="jumbotron">
    <div class="py-1">
        <h2 class="text-center display-4">Contact Us</h2>
    </div>

</div>
<section class="my-3">
    <div class="py-5">
        <h2 class="text-center">Thanks For Your Enquiry, Our Customer Care Executive will contact you soon.</h2>
    </div>
</section>

<?php
$con = mysqli_connect('localhost','root');
mysqli_select_db($con, 'computerhost');

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$service = $_POST['service'];
$date = $_POST['date'];
$time = $_POST['time'];

$query = " insert into bookingdata (name, email, mobile, address, service, date, time) 
values ('$name','$email','$mobile','$address','$service','$date','$time') ";
mysqli_query($con, $query); 
header('location:booking.php');
    echo "<h3><center>The details that you entered are : </center></h3><br/><br/>";
    echo "<h3><center>Userame : ".$name."</center></h3><br/>";
    echo "<h3><center>Email Id : ".$email."</center></h3><br/>";
    echo "<h3><center>Mobile : ".$mobile."</center></h3><br/>";
    echo "<h3><center>Message : ".$address."</center></h3><br/>";
    echo "<h3><center>Gender : ".$service."</center></h3><br/>";    
    echo "<h3><center>Gender : ".$date."</center></h3><br/>";    
    echo "<h3><center>Gender : ".$time."</center></h3><br/>";    
?>

</main>
<?php  require 'footer.php'; ?>
