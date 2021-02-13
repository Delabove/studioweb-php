<!DOCTYPE html>
<html lang="">
<head>

    <title>CSS Navigation</title>
    <style>
        /*.container{*/
        /*    background-color: lavender;*/
        /*}*/
        ul {

            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }
        li{
            display: inline;
            float: right;
        }
        li a {
            display: block;
            color: white;
            font-size: 25px;
            font-family: Didot;
            font-weight: bolder;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }


    </style>
</head>
<body>
<div>
    <ul  class="container">
        <li  class="list-item"><a href="#home">Home</a></li>
        <li  class="list-item"><a href="#about">About</a></li>
        <li  class="list-item"><a href="#contact">Contact</a></li>
    </ul>
</div>
<?php
$password= 1234;
?>
</body>
</html>