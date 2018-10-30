<?php

// Create or access a Session
session_start();


// Get the database connection file
require_once 'library/connections.php';

foreach ($db->query('SELECT lastName, firstname, email FROM users') as $row)
{
  echo 'first name: ' . $row['firstName'];
  echo 'last name: ' . $row['lastName'];
  echo 'email: ' . $row['email'];
  echo '<br/>';
}

?>

