<?php

session_start();
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

</body>
</html>
