<?php include_once('../partail/header.php') ?>
<div class="container p-4">
    <?php
        require_once('../database/database.php');
        $id = $_GET['id'];
        $product = getOneProduct($id);
        foreach($product as $item):
    ?>
        <form action="edit_product_model.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control" placeholder="Name" value="<?= $item['productId'] ?>" name="id">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" value="<?= $item['productName'] ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="description" value="<?= $item['description'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price" value="<?= $item['price'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="User ID" name="userId" value="<?= $item['userId'] ?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category ID" name="categoryId" value="<?= $item['categoryId'] ?>">
            </div>
            <!-- <div class="form-group">
                <input type="text" class="form-control" placeholder="Image URL" name="image_url">
            </div> -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
    <?php include_once('../partail/footer.php') ?>