<?php

// Create or access a Session
session_start();


// Get the database connection file
require_once 'library/connection.php';

foreach ($db->query('SELECT lastname, firstname, email FROM users') as $row)
{
  echo 'first name: ' . $row['firstname'];
  echo 'last name: ' . $row['lastname'];
  echo 'email: ' . $row['email'];
  echo '<br/>';
}

?>

