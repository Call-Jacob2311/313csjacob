<?php

// Get the database connection file
require_once 'library/connection.php';

$lastName = filter_input(INPUT_POST, 'lastname');

$stmt = $db->prepare('SELECT lastname, firstname FROM patients WHERE lastname=:lastName');
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);

while ($rows = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo 'First name: ' . $rows['firstname'] . $rows['lastname'] . '</br>';
}

