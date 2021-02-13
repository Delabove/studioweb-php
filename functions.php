<?php
    $message= strlen("I am learning a little php;"); //counts the length of a strength
    $message2 = date("m/d/y");
//        scandir("");
//    $fname= array("Jacques", "DeLayne", "Tuck", "Mia");
?>
<!DOCTYPE html>
<html lang="">
<head>
    <title>Ch 8 Functions</title>
</head>
<body>

    <h1>PHP Functions</h1>

    <?php
        function familyName($fname) {
            echo "$fname LaBove <br>";
        }
    familyName("Jacques");
    familyName("DeLayne");
    familyName("Tuck");
    familyName("Mia");

    print_r("Today's Date; " . $message2);
    ?>

</body>
</html>
