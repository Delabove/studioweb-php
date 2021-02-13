<?php
$name= $_POST["name"];
//$password= $_POST["password"];

$favcolor = $_POST["fav-color"];
$message= " ";

//if($password != 1234){
//
//    header("location: https://delabove.github.io/");
//
//    echo "<script> alert('Oh No!')</script>";
//
//    $message = "Please try again!";
//
//} else {
//    echo "<script> alert('Congrats!')</script>";
//    $message = "Welcome to the gang!";
//}




switch ($favcolor){
    case "red":
        $message = "Your favorite color is red!";
        break;
    case "blue":
        $message = "Your favorite color is blue!";
        break;

    case "green":
        $message = "Your favorite color is green!";
        break;

    case "yellow":
        $message = "Your favorite color is yellow!";
        break;

    case "orange":
        $message = "Your favorite color is orange!";
        break;

    case "purple":
        $message = "Your favorite color is purple!";
        break;

    case "pink":
        $message = "Your favorite color is pink!";
        break;

    default:
        $message = "Too many options to list!";




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
