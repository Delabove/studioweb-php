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
        function familyName($fname, $year) {
            echo "$fname LaBove, born in $year <br>";
        }
    familyName("Jacques", "85");
    familyName("DeLayne", "80");
    familyName("Tuck", "12");
    familyName("Mia", "17") ;

    print_r("<br> Today's Date; " . $message2);
    ?>

</body>
</html>
