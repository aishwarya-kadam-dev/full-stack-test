<?php

require '../database.php';
include 'header.php';

$id = $_GET['id'];

$data = $conn->query("
    SELECT *
    FROM categories
    WHERE id = $id
");

$row = $data->fetch_assoc();

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $icon = $_POST['icon'];

    $conn->query("
        UPDATE categories
        SET
        title='$title',
        icon='$icon'
        WHERE id=$id
    ");

    header("Location: categories.php");
}
?>

<div class="card p-4">

    <h3>Edit Category</h3>
    <form method="POST">
        <div class="mb-3">
            <label>Category Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo isset($row) ? $row['title'] : ''; ?>">
        </div>

        <div class="mb-3">
            <label>Icon File Name</label>
            <input type="text" name="icon" class="form-control" value="<?php echo isset($row) ? $row['icon'] : ''; ?>">
        </div>

        <button type="submit" name="submit" class="btn btn-success">Update Category</button>
    </form>

</div>