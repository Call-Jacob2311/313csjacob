<?php
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$places = htmlspecialchars($_POST["places"]);
$comments = htmlspecialchars($_POST["comments"]);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Submission Results</title>
    </head>
    
    <body>
        <h1>Your Results:</h1>
        
        <p>Name: <?=$name ?></p>
        <p>Email: <?=$email ?></p>
        <p>Major: <?=$major ?></p>
        <p>Comments: <?=$comments ?></p>
        <p>Places: <?=$places ?></p>
    </body>
    
    
</html>