<?php
require_once 'library/connection.php';

$firstName = filter_input(INPUT_POST, 'firstname');
$lastName = filter_input(INPUT_POST, 'lastname');
$gender = filter_input(INPUT_POST, 'gender');
$age = filter_input(INPUT_POST, 'age');
$email = filter_input(INPUT_POST, 'email');
$address = filter_input(INPUT_POST, 'address');

$stmt = $db->prepare('INSERT INTO patients (firstname, lastname, gender, age, email, address) VALUES (:firstName, :lastName, :gender, :age, :email, :address)');
$stmt->bindValue(':firstName', $lastName, PDO::PARAM_STR);
$stmt->bindValue(':lastName', $firstName, PDO::PARAM_STR);
$stmt->bindValue(':gender', $gender, PDO::PARAM_STR);
$stmt->bindValue(':age', $age, PDO::PARAM_INT);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':address', $address, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>