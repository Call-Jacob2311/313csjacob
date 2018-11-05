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
                <h2>GamerBase Collection</h2>
                <div class="btn-container">
                    <?php
                        require_once 'library/connection.php';
                        foreach ($db->query('SELECT title, year, status, rating FROM game') as $row)
                        {
                          echo 'Title: ' . $row['title'] . '<br>';
                          echo 'Year: ' . $row['year'] . '<br>';
                          echo 'Status: ' . $row['status'] . '<br>';
                          echo 'Rating: ' . $row['rating'];
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