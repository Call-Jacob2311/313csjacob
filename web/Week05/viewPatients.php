<?php
require_once 'library/connection.php';

foreach ($db->query('SELECT lastname, firstname, ID FROM patients') as $row)
{
  echo 'Name: ' . $row['firstname'] . ' ' . $row['lastname'] . '        <a href="patient.php" value="' . $row[ID] . '">Click me!</a>';
  echo '<br/><br/>';
}
?>

<button type="button" value="submit" onclick="window.location.href='addPatient.php'">Add new patient</button>
</br>
<button type="button" value="Click on Me!!" onclick="window.location.href='index.php'">Return home</button>