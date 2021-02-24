<?php  session_start(); ?>

<?php  require 'header.php'; ?>

<main>
<div class="jumbotron">
    <div class="py-1">
        <h2 class="text-center display-4">Sign Up</h2>
    </div>
</div>
<?php  
include 'dbcon.php'; 

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);

    if($emailcount>0)
    {
?>
        <script>
        alert( "Sorry, that Email already exist.");    
        </script>
<?php    
    }
    else
    {
        if($password === $cpassword)
        {
            
            $insertquery = " insert into registration( username, email, mobile, password, cpassword) 
            values('$username','$email','$mobile','$pass','$cpass') ";

            $iquery =  mysqli_query($con, $insertquery);

            if ($iquery) 
            {
?>
                <script>
                    alert( "Congratulations your account has been created, now you can login.");    
                </script>
<?php
            }
            else
            {
?>
                <script>
                    alert( "Something went wrong, please try again.");    
                </script>
<?php
            }
        }
        else
        {
?>
                <script>
                    alert( "Sorry your password and confirm password didn't match.Try again with correct passwords.");    
                </script>
<?php
        }
        
    }
}

?>

<div class="card border-0">
    <article class="card-body mx-auto" >
        <h2 class="card-title mt-3 text-center">Create Account</h2>
        <p class="text-center" >Get started with your free account</p>
    
        <form action="<?php  echo htmlentities($_SERVER['PHP_SELF']); ?> " method="post">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
                <input type="text" name="username" id="Name" autocomplete="off" class="form-control" required="required" placeholder="Full Name">
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
                <input type="email" name="email" id="Email" autocomplete="off" class="form-control" required="required" placeholder="Email">
        </div> 
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
                <input type="tel" name="mobile" id="Mobile" autocomplete="off" pattern="[0-9]{10}" class="form-control" required="required" placeholder="Phone number">
        </div> 
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
                <input type="password" name="password" id="Password" autocomplete="off" class="form-control" required="required" placeholder="Password">
        </div> 
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
                <input type="password" name="cpassword" id="CPassword" autocomplete="off" class="form-control" required="required" placeholder="Confirm password">
        </div>   
        <div class="form-group ">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
        </div> 
        <p class="text-center" >Already have an account? <a href="login.php">Login</a></p>
        </form>
    </article>
</div>


</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php  require 'footer.php'; ?>