<?php

require '../database.php';
include 'header.php';

$result = $conn->query("SELECT * FROM categories ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>

<head>
    <title>Categories</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>

<div class="container mt-4">

    <h2>Categories</h2>

    <a href="add-category.php" class="btn btn-primary mb-3">
        Add Category
    </a>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Icon</th>
            <th>Action</th>
        </tr>

        <?php while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['icon']; ?></td>
            <td>
                <a href="edit-category.php?id=<?php echo $row['id']; ?>"
                   class="btn btn-warning">
                    Edit
                </a>

                <a href="delete-category.php?id=<?php echo $row['id']; ?>"
                onclick="return confirm('Delete Category?')"
                class="btn btn-danger">
                Delete
                </a>
            </td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>