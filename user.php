<?php  
session_start(); 
if(!isset($_SESSION['username']))
{
    header('location:login.php');
}
?>

<?php  require 'header.php'; ?>
<main>
<div class="jumbotron">
    <div class="py-1">
        <h2 class="text-center display-4">Hello <?php  echo $_SESSION['username'];  ?></h2>
        <p class="text-right">
        <a href="logout.php" class=" text-right btn btn-primary ">Logout</a>
        </p>
    </div>
   
</div>

<?php  
include 'dbcon.php'; 

if(isset($_POST['submit']))
{
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];
    $query = $_POST['query'];
    
    $query = " insert into inquiry (username, email, query) 
    values ('$username','$email','$query') ";
    $equery = mysqli_query($con, $query); 

    if ($equery) {
        ?>
            <script>
                    alert( "We received your query, our experts will reply you soon.");    
            </script>
<?php   
    }  
}
?>

<section class="my-4">
    <div class="container py-3">
        <div class="row">
            <div class=" col-12">
               <p  class="text-center" style="font-size:30px; line-height:30px;">
               Computer Host is there to help you. 
               </p>
            </div>
            <div class = "contact_btn" >

            </div> 

        </div>
    </div>
    <div class="container">
        <div class="row"> 
                <div class="col-lg-6 col-md-6 col-12">
                    <img class="img-fluid pb-4" src="images/wel.jpg" alt="Card image">
                </div>
       
            <div class="col-lg-6 col-md-6 col-12">
            <p  style="font-size:25px; line-height:40px;">
                If you have any query regarding the repair of your laptop, computer or your smartphone,
                feel free to ask us. Our well-experienced and qualified technicians will reply to your 
                inquiry as soon as possible. If you have any kind of questions, 
                please fill in the inquiry box down below and wait for the reply from our expert's team.
            
            </p>
                
               
            </div>
           
        </div>
    </div>
    
    <div class="container">
        <div class="row">
        <div class="col-12">
        <p  class="text-center" style="font-size:25px; line-height:30px;">        
                    <a href="https://www.facebook.com/computerhost26" > <i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/computer.host/" > <i class="fab fa-instagram"></i></a>  
                    <a  href="https://twitter.com/" ><i class="fab fa-twitter " aria-hidden="true"></i></a>
                    <a  href="https://www.youtube.com/" ><i class="fab fa-youtube " aria-hidden="true"></i></a>
                    <a  href="https://www.linkedin.com/" ><i class="fab fa-linkedin-in " aria-hidden="true"></i></a>
        </p>
        </div>
        </div>
    </div>

   


</section>

<section class="my-4">
    
    <div class="w-50 m-auto">
    <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?> " method="post">
        
            <div class="form-group">
                <h3><label>Any Inquery?</label><h3>
                
                <input type="text" name="query" id="query" autocomplete="off" class="form-control" required="required" >

            </div> 
            <button type="submit" class="btn btn-primary" name="submit"  >Submit</button> 

                       
    </form>
    </div>

</section>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php  require 'footer.php'; ?>
