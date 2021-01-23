<?php

session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php include 'css/style.php' ?>
    
    <?php include 'links/links.php'; ?>

</head>
<body>

<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email='$email' ";
    $query = mysqli_query($con,$email_search);

    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['password'];

        $_SESSION['username'] = $email_pass['username']; 

        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "Login Successful";
            ?>
                <script>
                    location.replace("home.php");
                </script>
            <?php
        }else{
            echo "Wrong Password";
        }
            
        }else{
            echo "Invalid email";
        }
    }


?>

<div class= "card bg-light">
  <article class="card-body mx-auto" style="max-width: 400px;">
     <h4 class="card-title mt-3 text-center">Log In</h4>
    <p class="text-center">Provide Credentials</p>
    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?> " method="POST">
      <div class ="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-user"></i> </span>
        </div>
        <input name ="email" class="form-control" placeholder="Email address" type="email" required>
      </div> <!--form-group//-->

      <div class ="form-group input-group">
        <div class="input-group-prepend">
          <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" placeholder="Password" type="password" name="password" value="" required>
      </div> <!--form-group//-->


      <div class ="form-group input-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Log In </button>
      </div> <!--form-group//-->
        <p class="text-center">Don't have an account? <a href="">SignUp here</a> </p>

</form>
  </article>
</div>
</div>
</body>
</html>