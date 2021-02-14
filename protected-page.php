<?php

session_start();

if(isset($_SESSION['isLoggedIn'])){


} else {

    header('Location: login.php?isBlock=true');
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="ch-12-styles.css">

</head>
<body>

<nav>
    <ul>
        <li><a href="login.php">Home</a></li>
        <li><a href="protected-page.php">Protected Page</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
</nav>

<main>
    <div id="protected-content">
        <h1>Welcome to WheatBook!</h1>

        <h2>You're currently viewing members only content!</h2>

    </div>
</main>






</body>
</html>