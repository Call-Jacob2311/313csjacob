<!DOCTYPE html>
<html>
    <head>
	<title>GamerBase Version - One</title>
	<link rel="stylesheet" type="text/css" href="mainCSS.css">
    </head>
    
    <body>
        <div class="container">
            <header>
                <h1 onclick="window.location.href='index.php'">GamerBase</h1>
            </header>

            <div id="home">
                <h2>Edit Collection</h2>
                <div class="btn-container">
                    <?php
                        require_once 'library/connection.php';
                        foreach ($db->query('SELECT title, year, status, rating, GameId FROM game') as $row)
                        {
                          echo 'Title: ' . $row['title'] . '<br>';
                          echo 'Year: ' . $row['year'] . '<br>';
                          echo 'Status: ' . $row['status'] . '<br>';
                          echo 'Rating: ' . $row['rating'] . '<br>';
                          echo '<button type="button" value="submit" onclick="window.location.href="editGame.php">Edit</button><br>'
                          echo '<button type="button" value="submit" onclick="window.location.href="deleteGame.php">Delete</button>'
                          echo '<br/><br/>';
                        }
                    ?>
                </div>
            </div>

            <footer>
                <span>Property of Jacob Call. All code and resources strictly used for school. Work in the making.</span>
            </footer>
        </div>
    </body>
</html>