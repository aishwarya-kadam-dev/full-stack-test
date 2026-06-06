<?php

require '../database.php';
include 'header.php';

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $icon  = $_POST['icon'];

    $sql = "INSERT INTO categories(title,icon) VALUES ('$title', '$icon' )";

    $conn->query($sql);

    header("Location: categories.php");
}
?>

<div class="card p-4">
    <h3>Add Category</h3>
    <form method="POST">
        <div class="mb-3">
            <label>Category Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Icon File Name</label>
            <input type="text" name="icon" class="form-control">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Save Category</button>

    </form>

</div>
