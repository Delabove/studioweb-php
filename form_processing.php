<?php
$name= $_POST["name"];
$password= $_POST["password"];
$message='';

if($password != 1234){

    header("location: https://delabove.github.io/");

    echo "<script> alert('Oh No!')</script>";

    $message = "Please try again!";

} else {
    echo "<script> alert('Congrats!')</script>";
    $message = "Welcome to the gang!";
}

?>

<!DOCTYPE html>
<html lang="">
<head>

    <title>Ch 6: PHP & Forms</title>
</head>
<body>

<h1>PHP Form Processing</h1>
<?php echo $message;?>


</body>
</html>
