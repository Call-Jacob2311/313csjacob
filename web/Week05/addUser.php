<?php

require_once 'library/connections.php';

$firstName = filter_input(INPUT_POST, 'firstname');
$lastName = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');

echo firstName;