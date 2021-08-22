<?php include_once('../partail/header.php') ?>
    <div class="container p-4" style="background: #3C565B; width: 30%; margin-top: 5%;">
        <form action="create_product_model.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Description" name="description">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="User ID" name="userId">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Category ID" name="categoryId">
            </div>
            <div class="form-group">
                <input type="file" name="file" id="file">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
        </form>
    </div>
    <?php include_once('../partail/footer.php') ?>
    