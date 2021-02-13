<?php

function firstFunction($name = 'default name'){
    echo "Hello $name! <br>";
}


function secondFunction($name = 'default'){
//    return "Hello $name!";
    echo "Hello $name! <br>";
}

function thirdFunction($name = 'default'){
    return "Hello $name!";

}



?>

<!DOCTYPE html>
<html lang="">
<head>
   <title>Chapter 10</title>
</head>
<body>
<h1>Custom Functions</h1>

<?php

firstFunction("DeLayne");
secondFunction("Jacques");
secondFunction("Tuck");
secondFunction("Mia");
echo thirdFunction("Paulette");
?>


</body>
</html>
