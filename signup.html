<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css\css1.css">
    <title>Document</title>
</head>
<body>
<?php 
    include 'base.php'; ?>
    <?php
// require 'config.php';
if(!empty($_SESSION["id"])){
    header("location: index.html");
}
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $confirmpassword=$_POST["confirmpassword"];
    $age=$_POST["age"];
    $duplicate=mysqli_query($conn,"SELECT * FROM register WHERE username='$username' OR email ='$email'");
    if(mysqli_num_rows($duplicate)>0){
        echo
        "<script>alert('username or email already taken');</script>";
    }
    else{
        if($password == $confirmpassword){
            $query =" INSERT INTO register VALUES('', '$name' ,'$username', '$email','$password' ,'$age',current_timestamp() )";
            mysqli_query($conn,$query);
            echo
        "<script>alert('registration sucessful');</script>";
        }
        else{
            echo
        "<script>alert('password does not match');</script>";
        }
    }
}
?>
    <h1 style="text-align: center; padding: 5px;">SIGNUP HERE</h1>
    <form action="" method="post" autocomplete="off">
        <div class="form-group">
        <label for="name">NAME:</label>
        <input type="text" name="name"  id="name" required value="">
        <label for="username">USERNAME:</label>
        <input type="text" name="username" id="username" required value="">
        <label for="age">AGE:</label>
        <input type="text" name="age" id="age" required value="">
        <label for="email">EAMIL:</label>
        <input type="email" name="email" id="email" required value="">
        <label for="password">PASSWORD:</label>
        <input type="password" name="password" id="password" required value="">
        <label for="confirmpassword">CONFIRM PASSWORD:</label>
        <input type="confirmpassword" name="confirmpassword" id="confirmpassword" required value="">
        <button type="submit" name="submit">Register</button>
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
    width: 10%;
    padding: 3px;
    margin: 1px auto;
    border-radius: 25PX;
    /* border: 2px solid rgb(51, 49, 49); */
    font-size: 25px;
    font-family: 'Do Hyeon', sans-serif;
}
        .form-group input {
    /* background: none; */
}
a{
    text-decoration: none;
    color: black;
}
    </style>
</body>
</html>