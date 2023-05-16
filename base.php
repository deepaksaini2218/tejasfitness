<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<header class="header">
        <?php
        require 'config.php';
        ?>

<!-- left box for logo -->
<div class="left">
    <img src="img/index.png">
    <div>
        TEJAS FITNESS
    </div>

</div>
<!--mid  box for navbar -->
<div class="mid">
    <ul class="navbar">
        <li><a href="index.php" class="active">HOME</a></li>
        <li><a href="About us.php">ABOUT US</a></li>
        <li><a href="photo gallery.php"> PHOTO GALLERY </a></li>
        <li><a href="contact us.php">CONTACT US</a></li>
        <?php 
        if(!empty($_SESSION["id"])){
        echo '<li><a href="dashboard.php">DASHBOARD</a></li>';
        }
        ?>
    </ul>

</div>
<!-- right box for buttons -->
<div class="right">
    <?php
    
    if(!empty($_SESSION["id"])){
        $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT * FROM register WHERE id='$id'");
    $row=mysqli_fetch_assoc($result);
        echo '<button class="btn"><a href="signup.php" style="color: white;  padding: 7px; font-size: 20px;">welcome'?> <?php echo $row['name']; ?> <?php '</a></button>' ; 
   echo '<button class="btn"><a href="logout.php" style="color: white;  padding: 7px; font-size: 20px;">LOGOUT</a></button>';?>
<?php
}
        else {
            echo '<button class="btn"><a href="login.php" style="color: white;  padding: 7px; font-size: 20px;">LOGIN</a></button>';
           echo '<button class="btn"><a href="signup.php" style="color: white;  padding: 7px; font-size: 20px;">SIGN UP</a></button>';
        }
        ?>
    


</div>
</header>
    <title>Document</title>
</head>
<body>
    
</body>
</html>

