<?php
require_once 'library/connection.php';

foreach ($db->query('SELECT lastname, firstname FROM patients') as $row)
{
  echo 'first name: ' . $row['firstname'] . ' ' . $row['lastname'];
  echo '<br/><br/>';
}
?>