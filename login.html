<?php 
    include 'base.php'; 

// require 'config.php';
if(!empty($_SESSION["id"])){
    header("location: dashboard.php");
}
if(isset($_POST["submit"])){
    $usernameemail=$_POST["usernameemail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"SELECT * FROM register WHERE username='$usernameemail' OR email ='$usernameemail'");
    $row=mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result)>0){
        if($password == $row["password"]){
            $_SESSION["login"]=true;
            $_SESSION["id"]=$row["id"];
            header("location: dashboard.php");
        }
        else{
            echo "<script> alert('wrong password');</script>";
        }

        }
        else{
            echo "<script> alert('wrong username');</script>";
        }

    
}
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css\css1.css">
</head>
<body>
    <h1 style="text-align: center; padding: 5px;">LOGIN/SIGNUP</h1>

    
    <form action="" method="post" autocomplete="off">
        <div class="form-group">
        <label for="usernameemail">USERNAME or EMAIL:</label>
        <input type="text" name="usernameemail" id="usernameemail" required value=""><br>
        <label for="password">PASSWORD:</label>
        <input type="password" name="password" id="password" required value=""><br>
        <button type="submit" name="submit">login</button>
        <button ><a href="signup.php">register here</a></button>
        </div>
</form>
<style>
     .form-group label {
    text-align: center;
    display: block;
    width: 386px;
    padding: 3px;
    margin: 1px auto;
    /* border: 2px solid rgb(51, 49, 49); */
    font-size: 25px;
    font-family: 'Do Hyeon', sans-serif;
}
        .form-group button {
    text-align: center;
    display: block;
    width: 12%;
    padding: 3px;
    margin: 4px auto;
    border-radius: 25PX;
    /* border: 2px solid rgb(51, 49, 49); */
    font-size: 25px;
    font-family: 'Do Hyeon', sans-serif;
}
a{
    text-decoration: none;
    color: black;
}
</style>
</body>
</html>