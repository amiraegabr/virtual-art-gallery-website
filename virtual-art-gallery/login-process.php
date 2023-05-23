<?php

if(isset($_POST['email'])){


$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "user";

$con = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$con) {
    die("connection to database failed due to" . mysqli_connect_error());

}
$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT * FROM `user_details` WHERE email = '$email' && password = '$password' " ;

$result = mysqli_query($con, $select);


    if(mysqli_num_rows($result) > 0){
        header('location:');
    }else{
        echo 'Invalid email or password';
    }

$con->close();
}

?>