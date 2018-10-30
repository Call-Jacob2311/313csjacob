<?php

require_once 'library/connection.php';

$firstName = filter_input(INPUT_POST, 'firstname');
$lastName = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');

$stmt = $db->prepare('INSERT INTO users (lastname, firstname, email) VALUES (:lastName, :firstName, :email)');
$stmt->bindValue(':lastName', $lastName, PDO::PARAM_STR);
$stmt->bindValue(':firstName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);