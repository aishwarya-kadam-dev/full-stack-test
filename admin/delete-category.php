<?php

require '../database.php';
include 'header.php';

$id = (int)$_GET['id'];

$conn->query("
DELETE FROM categories
WHERE id = $id
");

header("Location: categories.php");
exit;
?>