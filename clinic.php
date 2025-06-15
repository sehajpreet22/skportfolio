<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $host='localhost:3306';
    $user="root";
    $pass="";
    $db='db1';

    $conn=mysqli_connect($host,$user,$pass,$db);

    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];

    $sql = "INSERT INTO `appointment`(`name`, `age`) VALUES ('$name','$age')";

    if(mysqli_query($conn,$sql)){
        echo "<h2>Appointment Successful</h2>";
        header("location: index.html ");
    exit();
    }
    else{
        echo "Error:try again";
    }

   
    mysqli_close($conn);
    ?>
</body>
</html>