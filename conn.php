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