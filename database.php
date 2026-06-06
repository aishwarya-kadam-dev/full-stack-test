<?php

$conn = new mysqli(
    "localhost",
    "root",
    "123456",
    "wpoets_test"
);

if ($conn->connect_error) {
    die("Connection Failed");
}


?>