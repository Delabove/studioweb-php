<html>
<head>

    <title>Chapter 9</title>
</head>
<body>
<h1>PHP Loops</h1>

<?php

//for loop
for($i=1; $i <= 10; $i++){
    echo "This is a loop $i <br>";
}

//while loop
$x=0;
while($x <= 10){
    $x++;
    echo "<br> While" . $x;
}

//for each
$artist= array("Sarah McChlaclan", "Sheryl Crow", "Miranda Lambert");
foreach ($artist as $value){
//    echo $value . "<br>";
}


?>

</body>
</html>
