<?php

require '../database.php';

$category_id = (int)$_POST['category_id'];

$sql = "SELECT * FROM slides WHERE category_id = $category_id ORDER BY sort_order";

$result = $conn->query($sql);

$slides = [];

while($row = $result->fetch_assoc()){
    $slides[] = $row;
}

echo json_encode($slides);

?>