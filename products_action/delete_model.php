<?php
    include_once('../database/database.php');
    deleteProduct($_GET['id']);
    header('Location: http://localhost/SD-Online-shop/?page=allProducts');