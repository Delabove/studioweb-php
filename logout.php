<?php

session_start();

session_unset();

session_destroy();

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

</main>
</body>
</html>

<!--//heredoc and nowdoc syntaxes are useful when we want to define a multiline string.-->
<!---->
<!---->
<!--//  DOUBLE QUOTE-->
<!--// double quote string we can use escaped characters like \n which gets interpreted as a new line break-->
<!--// and variables will get substitued for their respective values.-->
<!--// EX: "Surrounded by double"-->
<!---->
<!---->
<!---->
<!--//  SINGLE QUOTE-->
<!--//Single quoted strings are literal.-->
<!--// ex: 'surrounded by single quote'-->
<!--//This means escaped characters do not expand, e.g. '\n' will not result in a new line, the string will literally be a backslash followed by the character n-->
<!--//Variables do not get replaced by their respective values-->