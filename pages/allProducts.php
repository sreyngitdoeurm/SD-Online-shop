
<div class="container p-4">
        <div class="d-flex justify-content-end p-2" >
            <form action="" method="post" style="width: 70%; margin-right: 5%">
                <div class="input-group mb-2"  >
                    <input type="text" class="form-control" placeholder="Search" name="search" >
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit" placeholder="Search by title">Search</button>
                    </div>
                </div>
            </form>
            
                <a href="products_action/create_product.php" class="btn btn-primary">Add +</a>
            
        </div>
        <?php 
            require_once('database/database.php');
            $products = "";
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $products = searchByName($_POST);
            }else{
                $products = getAllProducts();
            }
 
            foreach ($products as $product):
        ?>
        <!-- <div class="card"> -->
            <div class="col-12" style=" width: 60%">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="d-flex">
                            <div class="card-image mr-3">
                                <img class="img-fluid" width="100" src="images/<?= $product['image'] ?>" alt="">
                            </div>
                            <div class="info">
                                <h5 class="display-5">Name: <?= $product['productName'] ?></h5>
                                <strong>Price: <?= $product['price'] ?> ៛</strong><br>
                                <p>Description: <?= $product['description'] ?></p> 
                            </div>
                    </div>
                    <small><?= $product['date'] ?></small>
                        
                            <div class="action d-flex justify-content-end">
                    
                                <a href="products_action/edit_product.php?id=<?= $product['productId'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></a>
                                <a href="products_action/delete_model.php?id=<?= $product['productId'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </div>
                       
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <?php endforeach; ?>
    </div>
    