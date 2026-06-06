<?php

require '../database.php';
include 'header.php';

$id = (int)$_GET['id'];

$conn->query("
DELETE FROM slides
WHERE id = $id
");

header("Location: slides.php");
exit;
?>