<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>php:/Server</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
       body{
        background-color: #414141;
       }
    </style>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<?php

    $country = $_POST["country"] ;
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pincode = $_POST["pincode"];
    $hnumber = $_POST["hnumber"];
    $streetno = $_POST["streetno"];
    $landmark = $_POST["landmark"];
    $address = "$hnumber , $streetno , $landmark";
    $city = $_POST["city"];
    $state = $_POST["state"];
    $mod_pay = $_POST["radio-group"];

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "contact_us";
    $connection = mysqli_connect($server,$username,$password,$database);

    $sql = "INSERT INTO `buy_info` (`First_Name`, `Last_Name`, `Phone`, `Email`, `Country`, `Pincode`, `Address`, `City`, `State`, `mod_of_payment`, `Time_of_submission`) VALUES ('$first_name', '$last_name', '$phone', '$email', '$country', '$pincode', '$address', '$city', '$state', '$mod_pay', current_timestamp())";

    $result = mysqli_query($connection , $sql);

    if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>SUCCESS!!</strong> Feedback Submitted Successfully!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>' ;
    }

    else{
        $er =   mysqli_error($connection);
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!!</strong>Some Issue Occured!!' .$er.
        '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }

?>

    
</body>
</html>
