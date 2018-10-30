<?php

// Get the database connection file
require_once 'library/connection.php';

$lastName = filter_input(INPUT_POST, 'lastname');

$stmt = $db->prepare('SELECT lastname, firstname FROM patients WHERE lastname=:lastName');
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($stmt as $row)
{
  echo 'first name: ' . $row['firstname'] . '</br>';
  echo 'last name: ' . $row['lastname'] . '</br>';
  echo '<br/><br/>';
}