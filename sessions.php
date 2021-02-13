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

$_SESSION["favcolors"] = "green";
$_SESSION["favanimal"] = "dog";

echo "Session variables are set. <br>";

?>
<a href="http://localhost:63342/studioweb-php/sessions2.php?_ijt=gq051o0v7uc91qu5fpv497i2bd">VIEW SESSION</a>
</body>
</html>
