<?php

session_start();

$_SESSION["favcolors"] = "purple";
$_SESSION["favanimal"] = "puppies";
?>

<!DOCTYPE html>
<html lang="">
<head>

    <title>Ch 11</title>
</head>
<body>
<h1>PHP SESSIONS</h1>

<!--Tracks who is visiting in a dynamic website -basis of shopping carts and video games. -->
<?php

echo "Favorite color is " . $_SESSION["favcolors"] . ". <br>";
echo "Favorite animal is a  " . $_SESSION["favanimal"] . ". <br>";

echo "Session variables are set.";

?>

<h2>View session with print_r</h2>
<?php
print_r($_SESSION);
?>

<h2>Reset session variables</h2>
<?php
$_SESSION["favcolors"] = "blue";
$_SESSION["favanimal"] = "lizards";
echo "New session variable value:";
print_r($_SESSION);
?>

<h2>Destroy session variables</h2>
<?php

session_unset();

session_destroy();

echo "Session destroyed. <br>"

?>
</body>
</html>
