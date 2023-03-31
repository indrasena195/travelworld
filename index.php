<?php
if(isset ($_POST['click'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password,"travel_user");

    if(!$con){
        die("connection failed due to" . mysqli_connect_error());
    }

    echo "Successfully submited";
    

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

    $sql = " INSERT INTO userdata (  name, email, gender, phone, dt) 
    VALUES ('$name', '$email', '$gender', '$phone', current_timestamp())";
    // echo $sql;

    if($con->query($sql) == true){
        // echo "Successfully inserted";

    }
    else
    {
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Travel Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <div class="box1">
            <h1>Welcome To Travel World.com</h1>
            <p>Full Fill Your Dream </p>
        </div>
        <div class="navbar">
            <nav>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact US</a></li>
                    <li><a href="">Booking</a></li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <form action="index.php" method="post">
                <h2 class="h2">Sign Up</h2>
                <input class="name" type="text" name="name" id="name" placeholder="Name">
                <input  class="email" type="email" name="email" id="email" placeholder="Email">
                <input  class="gender" type="text" name="gender" id="gender" placeholder="Gender">
                <input class="phoneNo"  type="text" name="phone" id="phone" placeholder="PhoneNo">
                <button type="submit" name="click" class="btn">Submit</button>
            </form>
        </div>

</body>
</html>