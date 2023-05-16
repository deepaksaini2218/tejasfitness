<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tejas Fitness</title>
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/css1.css">
</head>


<body>
    
    <?php 
    include 'base.php'; 
    // require 'config.php';
    // if(!empty($_SESSION["id"])){
    //     header("location: index.php");
    // }
    if(isset($_POST["submit"])){
        $name=$_POST["name"];
        $age=$_POST["age"];
        $weight=$_POST["weight"];
        $gender=$_POST["gender"];
        $sql="INSERT INTO joingym ( `name`, `weight`, `age`, `gender`) VALUES ( '$name', '$weight', '$age', '$gender');";
        if($conn->query($sql)== TRUE){
            // mysqli_query($conn,$sql);
             echo "<script>alert( 'sucessfully inserted');</script>";
        }
        else{
            echo "error $sql <br> $conn->error";
         }
         $conn->close();
        
        }
        
    
    ?>
    <div class="container">
        
        <h2>JOIN OUR GYM NOW</h2>
        <form action="" method="POST">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name" required>

            </div>
            <div class="form-group">
                <input type="text" name="weight" placeholder="Enter your Weight" required>

            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter your Age" required>

            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter your Gender" required>

            </div>
            <button class="btn" type="submit" name="submit">Submit</button>

        </form>
        <!-- use as footer -->
        <div class="card bg-dark text-white">
            <img src="img/2 (4).jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>

    </div>
<style>
    body{
        background: url("css/img/pexels-sabel-blanco-1756959.jpg");
    }
    
</style>

</body>

</html>
