<!DOCTYPE html>
<html lang="">
<head>
    <title>Document</title>
</head>
<body>
    <h3>Your first PHP code -amazing!</h3>

    <?php
    echo('This is some php code.-1 <br>')
    ?>
    <?php
    echo('This is some php code.-2 <br>')
    ?>

    <?php
    $_variable = "concatinated string.";
    echo '<br>this is some php '.  $_variable .' <br>';
    ?>

    <?php
    $_variable = "lives inside the string";
    echo 'this is some php code ' . $_variable;
    ?>

    <?php
    $_variable = "lives inside the string";
    echo 'this is some php code ' . $_variable . '<br> <br>';

    ?>

<!--    --><?php
//    phpinfo();
//    ?>

    <?php
// Ch 4
    //single line comment
    # single line comment

    /* multi
    line
    comment */

    $x = 5 /* + 15 */ + 5;

    $secretVariable= 'password';
    echo $x .  '<br> <br>';

    ?>

    <?php

    #Ch 3 Lesson 1

    /* In PHP, all kewords (ex if, else, while, echo), classes, functions
   and user defined functions are not case sensitive */

        Echo 'Hello World <br>';
        echo 'Hello World <br>';
        EcHo 'Hello World <br>';

        //variables ARE case sensitive
        //NO var... just ($) to declare a variable

        $dog = 'red';
        echo 'My dog is ' . $dog . '<br>';
//        echo 'My cat is ' . $DOG . '<br>';
//        echo 'My tiger is ' . $dOg . '<br>';

    ?>

    <?php

    #Ch 3 Lesson 2 PHP variables
    $numberFive = 'Stefan';
    $newVar = 5;
    $floatingVar = 10.4;



    ?>

    <?php

    //Ch 4 Lesson 1 & 2 Includes and PHP Configurations
    //    echo $qwery;
    echo '</br>';
    ?>

    <h2>Ch 4 Lesson 2 Include </h2>
    <?php
        //CAN INCLUDE JS, CSS, HTML, AND PHP

        include("nav.php");
        //include 'nav.php'; //Note: supposed to be "safer" -read more

    ?>

    <?php
    echo  '</br>' . $password;
    ?>

<h2>Ch 5: Arrays</h2>

    <?php
    $food = array("Bananas", "Burgers","Chicken", 6);
    echo "What's in position 3: " . $food[2] . '</br>';
    echo "What's in position 1: " . $food[0] . '</br>';
    echo "What's in position 2: " . $food[1] . '</br>';
    echo "What's in position 4: " . $food[3] . '</br>';
    ?>
    <h2>Ch 5 Lesson 2 Arrays</h2>
</body>
</html>


