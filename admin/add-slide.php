<?php

require '../database.php';
include 'header.php';

$categories = $conn->query("SELECT * FROM categories");

if(isset($_POST['submit'])){

    $category_id = $_POST['category_id'];

    $tag_line = $_POST['tag_line'];

    $title = $_POST['title'];

    $image = $_POST['image'];

    $link = $_POST['learn_more_link'];

    $order = $_POST['sort_order'];

    $conn->query(" INSERT INTO slides (category_id, tag_line, title, image, learn_more_link, sort_order )
        VALUES
        ('$category_id','$tag_line', '$title', '$image', '$link', '$order')");

    header("Location: slides.php");
}
?>

<div class="card p-4">
    <h3>Add Slide</h3>

    <form method="POST">

        <div class="mb-3">
            <label>Category</label>

            <select name="category_id" class="form-control">

                <?php while($cat = $categories->fetch_assoc()) { ?>

                    <option value="<?php echo $cat['id']; ?>">
                        <?php echo $cat['title']; ?>
                    </option>

                <?php } ?>

            </select>
        </div>

        <div class="mb-3">
            <label>Tag Line</label>
            <input type="text" name="tag_line" class="form-control">
        </div>

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="mb-3">
            <label>Description</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Image Name</label>
            <input type="text" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label>Learn More Link</label>
            <input type="text" name="learn_more_link" class="form-control">
        </div>

        <div class="mb-3">
            <label>Sort Order</label>
            <input type="number" name="sort_order" class="form-control" value="1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">
            Save Slide
        </button>

    </form>
</div>