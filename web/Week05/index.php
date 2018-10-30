<?php

// Create or access a Session
session_start();


// Get the database connection file
require_once 'library/connection.php';


/************
foreach ($db->query('SELECT lastname, firstname, email FROM users') as $row)
{
  echo 'first name: ' . $row['firstname'] . '</br>';
  echo 'last name: ' . $row['lastname'] . '</br>';
  echo 'email: ' . $row['email'];
  echo '<br/><br/>';
}

********/

?>



<button type="button" value="submit" onclick="window.location.href='addPatient.php'">Add new patient</button>
</br>
<button type="button" value="submit" onclick="window.location.href='searchPatient.php'">Search for a patient</button>
</br>
<button type="button" value="submit" onclick="window.location.href='veiwPatients.php'">View all patients</button>
