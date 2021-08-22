<?php
    session_start();
    // connect with database
    function db(){
        return new mysqli('localhost','root','','shopping_project');
    }
    // create new product
    function createNewProduct($value,$image){

        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $categoryId =$value['categoryId'];
        $userId = $value['userId'];
        return db()->query("INSERT INTO products(productName,price,description,categoryId,userId,image) VALUES('$name','$price','$description','$categoryId','$userId','$image')");
        // include_once('index.php');
        
        
    }
    // get one product database
    function getOneProduct($id){
        return db()->query("SELECT * FROM products WHERE productId = $id");
    }
    // get all products from database
    function getAllProducts(){
        return db()->query("SELECT * FROM products ORDER BY productName DESC");
    }
    // delete product 
    function deleteProduct($id){
        return db()->query("DELETE FROM products WHERE productId = $id");
        
        // include_once('index.php');
    }
    // edit product
    function editProduct($value){
        $id= $value['id'];
        $name = $value['name'];
        $price = $value['price'];
        $description = $value['description'];
        $categoryId =$value['categoryId'];
        $userId = $value['userId'];
        header('Location: http://localhost/SD-Online-shop/?page=allProducts');
        return db()->query("UPDATE products SET productName = '$name', price = '$price', description = '$description', categoryId = '$categoryId', userId = '$userId' WHERE productId = '$id'");
        
    }
    // to search product name
    function searchByName($title){
        $name = $title['search'];
        return db()->query("SELECT * FROM products WHERE productName LIKE '%$name%'");
    }
    //  get all users from database
    function getAllUsers(){
        return db()->query("SELECT * FROM users");
    }
    //  get user login
    function userLogin($value){
        $email = $value['email'];
        $password = $value['password'];
        $users = getAllUsers();

        foreach ($users as $user) {
           echo (password_verify($password,$user['password']));
           if(password_verify($password,$user['password']) and $email === $user['email']) {
                $_SESSION['email'] = $email;
                $_SESSION['role'] = $user['role'];
                $_SESSION['message'] = "Login successful";
                header('Location: http://localhost/SD-Online-shop/?page=allProducts');
           }
           else {
                $_SESSION['message'] = "Login failed";
                header('Location: http://localhost/SD-Online-shop/?page=login');
           }
        }
    }
    // create new user
    function userRegister($value){
        $firstName = $value['firstName'];
        $lastName = $value['lastName'];
        $email = $value['email'];
        $password = password_hash($value['password'], PASSWORD_DEFAULT);
        $role = $value['role'];
        return db()->query("INSERT INTO users(firstName,lastName,email,password,role) VALUES('$firstName','$lastName','$email','$password','$role')");
    }