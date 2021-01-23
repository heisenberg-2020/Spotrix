<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
    <?php include 'css/style.php' ?>
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lonlgyExkL0=" crossorigin="anonymous" />
    <body>
    
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="https://thapatechnical.com/" target="_blank">User Panel</a>
            </div>

            <div class="menu">
                <u1>
                    <li><a href="#" class="active">home</a></li>
                    <li><a href="#"> gallery</a></li>
                    <li><a href="#"> gallery</a></li>
                    <li><a href="#"> gallery</a></li>
                    <li><a href="#"> gallery</a></li>

                </u1>
            </div>

            <div class="contact_btn">
                <a href="logout.php">Logout</a>
            </div>
        </nav>
        <div class="center_content">
            <h1>Hello <?php echo $_SESSION['username']; ?></h1>
        </div>
    </header>
</body>
</html>