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

if(mysqli_num_rows($result) > 0 ){
    echo "user already exists";
}
else
{
    $sql = "INSERT INTO `user_details` (`email`, `password`) VALUES ('$email', '$password')";

    if($con->query($sql) == true){
        echo "You are successflly registered";
        header('location:login.php');
    }
    else{
        echo "Error: $sql <br> $con->error" ;
    }

}

$con->close();
}

?>