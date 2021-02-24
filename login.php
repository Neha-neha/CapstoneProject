<?php  session_start(); ?>

<?php  require 'header.php'; ?>

<main>
<div class="jumbotron">
    <div class="py-1">
        <h2 class="text-center display-4">Login</h2>
       
    </div>

</div>

<?php  
include 'dbcon.php'; 

if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $email_search = " select * from registration where email = '$email' ";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);

    if ($email_count) 
    {
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username'];
        $_SESSION['email'] = $email_pass['email'];

        $pass_decode = password_verify($password, $db_pass);

        if ($pass_decode) 
        {
?>
            <script>
               location.replace("user.php");
            </script>
<?php             
        }
        else
        {
?>
                <script>
                    alert( "Incorrect Password.");    
                </script>
<?php       
        }
    }
    else 
    {
?>
        <script>
            alert( "Invalid Email.");    
        </script>
<?php         
    }
}
?>


<div class="card border-0">
    <article class="card-body mx-auto" >
        <h2 class="card-title mt-3 text-center">Let's get started</h2>
        <p class="text-center" >This will be an amazing experience</p>
    
        <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?> " method="post">
        
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                </div>
                    <input type="email" name="email" id="Email" autocomplete="off" class="form-control" required="required" placeholder="Email">
            </div> 
        
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                </div>
                    <input type="password" name="password" id="Password" autocomplete="off" class="form-control" required="required" placeholder="Password">
            </div> 
           
            <div class="form-group ">
                <button type="submit" name="submit" class="btn btn-primary btn-block">Login Now</button>
            </div> 
            <p class="text-center" >Don't have an account? <a href="signup.php">Sign up Here</a></p>
        </form>
    </article>
</div>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php  require 'footer.php'; ?>