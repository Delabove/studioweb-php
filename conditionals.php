<!DOCTYPE html>
<html lang="">
<head>
    <title>Ch 7 PHP</title>


    <style>
        form { border: #bcbcd6 1px solid; padding: 30px; border-radius: 20px; box-shadow: #42205d 1px 2px 4px;}
        label{ font-size: 18px; font-weight: bolder; }
        input{display: block; margin-bottom: 10px; padding: 10px; font-size: 16px; box-shadow: #42205d 1px 2px;}
        button{background-color: rebeccapurple; color: lavender; font-size: 16px; font-weight: bolder; border: #9090a4 1px solid; padding: 10px; box-shadow: #42205d 1px 2px; cursor: pointer;}
        div{ margin-top: 30px; border: #bcbcd6 1px solid; padding: 30px; border-radius: 20px; box-shadow: #42205d 1px 2px 4px;}
        select { display: block; border: #bcbcd6 1px solid; padding: 10px; box-shadow: #42205d 1px 2px 4px;}
        option{ font-size: 18px; font-weight: bolder; }
        #select-btn{margin-top: 20px;}


    </style>

</head>
<body>

<h1>Ch 7: Conditionals</h1>


<form method="POST" action="form_processing.php">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Name">
<!--    <label for="password">Password</label><br>-->
<!--    <input type="text"id="password" name="password" placeholder="Password"> <br>-->

        <h2>Favorite Color:</h2>

        <select name="fav-color" id="fav-color">
            <option value="red">Red</option>
            <option value="blue">Blue</option>
            <option value="yellow">Yellow</option>
            <option value="green">Green</option>
            <option value="orange">Orange</option>
            <option value="purple">Purple</option>
            <option value="pink">Pink</option>
        </select>

        <button id="select-btn" type="submit">SUBMIT</button>

</form>

</body>
</html>
