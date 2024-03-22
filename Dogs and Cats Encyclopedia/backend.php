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
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $tarea = $_POST["tarea"];

        $server = "localhost";
        $username = "root";
        $password = "";
        $database = "contact_us";
        $connection = mysqli_connect($server,$username,$password,$database);

        $sql = "INSERT INTO `user_info` (`First_Name`, `Last_Name`, `Phone`, `Email`, `Feedback`, `Time_of_record`) VALUES ('$fname', '$lname', '$phone', '$email', '$tarea', current_timestamp())";

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


