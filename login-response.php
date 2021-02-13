<?php

session_start();

$userName = $_POST["userName"];

if(trim($userName) == "DeLayne"){
    $_SESSION['isLoggedIn'] = true; //set the session to true to log in.
    header('Location: protected-page.php');

} else {

    header('Location: login.php?badUserCredentials=true');
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


<!--// "trim "cuts off whitespaces so if the user adds spaces the computer won't account for them-->