<?php

require '../database.php';
include 'header.php';

$sql = "SELECT s.*, c.title AS category_name FROM slides s LEFT JOIN categories c ON c.id = s.category_id
    ORDER BY s.id DESC";

$result = $conn->query($sql);

?>

<div class="card p-4">

    <div class="d-flex justify-content-between mb-3">

        <h3>Slides</h3>

        <a href="add-slide.php"
           class="btn btn-primary">

            Add Slide

        </a>

    </div>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category</th>
                <th>Title</th>
                <th>Image</th>
                <th>Sort Order</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
            <tr>

                <td><?php echo $row['id']; ?></td>

                <td><?php echo $row['category_name']; ?></td>

                <td><?php echo $row['title']; ?></td>

                <td><?php echo $row['image']; ?></td>

                <td><?php echo $row['sort_order']; ?></td>

                <td>

                    <a href="edit-slide.php?id=<?php echo $row['id']; ?>"
                    class="btn btn-warning btn-sm">

                        Edit

                    </a>

                    <a href="delete-slide.php?id=<?php echo $row['id']; ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Delete this slide?')">

                        Delete

                    </a>

                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>