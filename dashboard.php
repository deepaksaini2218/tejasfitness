<?php
include 'base.php';
// require 'config.php';
if(!empty($_SESSION["id"])){
    $id=$_SESSION["id"];
    $result=mysqli_query($conn,"SELECT * FROM register WHERE id='$id'");
    $row=mysqli_fetch_assoc($result);

}
else{
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css\css1.css">
</head>
<body>
    <h1 style="text-align: center;">welcome <?php echo $row['name'];?></h1>
    
   
    <table class="table" border="1">
        <tr>
            <th colspan="2">Your Dashboard </th>
            
        </tr>
        <tr>
            <td>NAME</td>
            <td><?php echo $row['name'];?></td>
        </tr>
        <tr>
            <td>USERNAME</td>
            <td><?php echo $row['username'];?></td>
        </tr>
        <tr>
            <td>EMAIL</td>
            <td><?php echo $row['email'];?></td>
        </tr>
        <tr>
            <td>AGE</td>
            <td><?php echo $row['age'];?></td>
        </tr>
    </table>
    <div class="btn1">
    <button ><a href="logout.php">logout</a></button>
</div>

    <style>
       table{
           text-align: center;
           margin: 10px auto;
           /* border: 2px solid white; */
       }
       th{
           padding: 10px;
           width: 250px;
           font-size: 20px;
           font-family: 'Do Hyeon', sans-serif;
       }
       td{
           padding: 10px;
           width: 250px;
           font-size: 20px;
           font-family: 'Do Hyeon', sans-serif;
       }
       .btn1 button {
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