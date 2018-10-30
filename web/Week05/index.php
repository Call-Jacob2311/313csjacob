<?php

// Create or access a Session
session_start();


// Get the database connection file
require_once 'library/connection.php';

foreach ($db->query('SELECT lastname, firstname, email FROM users') as $row)
{
  echo 'first name: ' . $row['firstname'] . '</br>';
  echo 'last name: ' . $row['lastname'] . '</br>';
  echo 'email: ' . $row['email'];
  echo '<br/>';
}

?>

<form action="addUser.php" method="post">
First Name: <input type="text" name="firstname"><br>
Last Name: <input type="text" name="lastname"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>