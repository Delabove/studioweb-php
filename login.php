<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <title>Ch 12 Advance PHP</title>
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
<h1>Welcome to WheatBook!</h1>

    <form method="POST" action="form_processing.php">
        <label for="name">Name</label><br>
        <input type="text" id="name" name="name" placeholder="Name"> <br>
        <label for="password">Password</label><br>
        <input type="text"id="password" name="password" placeholder="password"><br><br>
        <button type="submit">SUBMIT</button>
    </form>

</main>
</body>
</html>