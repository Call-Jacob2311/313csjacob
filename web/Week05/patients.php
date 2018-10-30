<?php
require_once 'library/connection.php';

$id = filter_input(INPUT_GET, 'id');

$stmt = $db->prepare('SELECT * FROM patients WHERE id=:id');
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo $rows['firstname'];
?>