
<form action="" method="post" style="width: 60%; margin-top: 2%; margin-left: 10%">
  <div class="input-group mb-2"  >
      <input type="text" class="form-control" placeholder="Search by category name" name="search" >
      <div class="input-group-append">
          <button class="btn btn-success" type="submit" placeholder="Search by title">Search</button>
      </div>
  </div>
</form>
<div class="d-flex flex-wrap">
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
  <div class="card" style="width: 18rem; margin: 5%; display: flex;height: 30%">
    <img class="card-img-top" src="images/<?= $product['image'] ?>" style="height: 30%">
    <div class="card-body">
      <h5><?= $product['productName'] ?></h5>
      <p class="card-text"><?= $product['description'] ?></p>
      <strong><?= $product['price']?> ៛</strong>
    </div>
  </div>
  <?php endforeach; ?>
</div>
