<?php
    require_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        userRegister($_POST);
        header('Location: http://localhost/SD-Online-shop/?page=allProducts');
    }