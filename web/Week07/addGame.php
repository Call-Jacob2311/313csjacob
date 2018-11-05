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
                <h2>Add A Game</h2>
                <div class="btn-container">
                    <form action="addGame-confirmation.php" method="post">
                        Title Name: <input type="text" name="title"><br>
                        Year: <input type="number" name="year" min="1970" max="2019"><br>
                        Status:<br><input type="radio" name="status" value="complete"> Complete<br>
                        <input type="radio" name="status" value="playing"> Playing<br>
                        <input type="radio" name="status" value="to do"> To Do<br> 
                        Please choose a rating (1-10): <input type="number" name="rating" min="1" max="10"><br>
                        <input type="reset" value="Reset" class="button">
                        <br>
                        <input type="submit" class="button">
                    </form>
                </div>
            </div>

            <footer>
                <span>Property of Jacob Call. All code and resources strictly used for school. Work in the making.</span>
            </footer>
        </div>
    </body>
</html>