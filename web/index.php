<!DOCTYPE html>
<html>
	<head>
		<title>Assignment 02 - Create Personal Homepage</title>
		<link rel="stylesheet" type="text/css" href="mainCSS.css">
		<script src="mainJS.js"></script>
	</head>

    <header>
        <h2>Jacob's Portal</h2>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="assignments.html">Assignments</a></li>
        </ul>
    </header>
    
	<body>
        <img src="homephoto.jpg">
        <div id="home-content">
            <h3>Student Updates:</h3>
            <span>>> 9/25 - TA 02 finished and submitted</span>
            <br>
            <span>>> 9/28 - Finished week two assignment, create homepage, submitted</span>
            <?php
                echo $_SERVER['REQUEST_TIME'];
            ?>
            
        </div>
		
	</body>
    
    <footer>
        <p>Property of Jacob Call. All code and resources strictly used for school.</p>
    </footer>

</html>