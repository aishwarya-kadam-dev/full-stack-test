<?php

require '../database.php';
include 'header.php';

$id = (int)$_GET['id'];

$categories = $conn->query("SELECT * FROM categories");

$slide = $conn->query("SELECT * FROM slides WHERE id = $id");

$row = $slide->fetch_assoc();

if(isset($_POST['submit'])){

    $category_id = $_POST['category_id'];
    $tag_line = $_POST['tag_line'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $learn_more_link = $_POST['learn_more_link'];
    $sort_order = $_POST['sort_order'];

    $sql = "UPDATE slides SET category_id = '$category_id', tag_line = '$tag_line', title = '$title', description = '$description', image = '$image', learn_more_link = '$learn_more_link', sort_order = '$sort_order' WHERE id = $id";

    $conn->query($sql);

    header("Location: slides.php");
    exit;
}
?>

<div class="card p-4">
    <h3>Edit Slide</h3>

    <form method="POST">

        <div class="mb-3">
            <label>Category</label>

            <select name="category_id" class="form-control">

                <?php while($cat = $categories->fetch_assoc()) { ?>

                    <option
                        value="<?php echo $cat['id']; ?>"
                        <?php if($cat['id'] == $row['category_id']) echo 'selected'; ?>
                    >
                        <?php echo $cat['title']; ?>
                    </option>

                <?php } ?>

            </select>

        </div>

        <div class="mb-3">
            <label>Tag Line</label>
            <input type="text"
                name="tag_line"
                class="form-control"
                value="<?php echo $row['tag_line']; ?>">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text"
                name="title"
                class="form-control"
                value="<?php echo $row['title']; ?>">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description"
                    class="form-control"><?php echo $row['description']; ?></textarea>
        </div>

        <div class="mb-3">
            <label>Image</label>
            <input type="text"
                name="image"
                class="form-control"
                value="<?php echo $row['image']; ?>">
        </div>

        <div class="mb-3">
            <label>Learn More Link</label>
            <input type="text"
                name="learn_more_link"
                class="form-control"
                value="<?php echo $row['learn_more_link']; ?>">
        </div>

        <div class="mb-3">
            <label>Sort Order</label>
            <input type="number"
                name="sort_order"
                class="form-control"
                value="<?php echo $row['sort_order']; ?>">
        </div>

        <button type="submit"
                name="submit"
                class="btn btn-success">
            Update Slide
        </button>

    </form>
</div>