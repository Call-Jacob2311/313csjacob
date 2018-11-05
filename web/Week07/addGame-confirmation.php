<?php
require_once 'library/connection.php';

$title = filter_input(INPUT_POST, 'title');
$year = filter_input(INPUT_POST, 'year');
$status = filter_input(INPUT_POST, 'status');
$rating = filter_input(INPUT_POST, 'rating');

$stmt = $db->prepare('INSERT INTO game (title, year, status, rating) VALUES (:title, :year, :status, :rating)');
$stmt->bindValue(':title', $title, PDO::PARAM_STR);
$stmt->bindValue(':year', $year, PDO::PARAM_STR);
$stmt->bindValue(':status', $status, PDO::PARAM_STR);
$stmt->bindValue(':rating', $rating, PDO::PARAM_INT);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
	<title>GamerBase Version - One</title>
	<link rel="stylesheet" type="text/css" href="mainCSS.css">
    </head>
    
    <body>
        <div class="container">
            <header>
                <h1>GamerBase</h1>
            </header>

            <div id="home">
                <h2>Thank you for adding a game!</h2>
                <div class="btn-container">
                    <?php
                        echo '<span>You have added: ' . $title . ' to the database! </span><br><br>'
                    ?>
                    <button type="button" value="submit" class="button" onclick="window.location.href='addGame.php'">Add another Game</button>
                    <br>
                    <br>
                    <button type="button" value="submit" class="button" onclick="window.location.href='index.php'">Go Home</button>
                </div>
            </div>

            <footer>
                <span>Property of Jacob Call. All code and resources strictly used for school. Work in the making.</span>
            </footer>
        </div>
    </body>
</html>