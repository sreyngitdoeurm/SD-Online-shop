<?php
 require_once('../database/database.php');
 $currentDate="";
 if(isset($_FILES['file'])){
    $imageName = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $folder = '../images/';
    move_uploaded_file($tmp_name, $folder.$imageName);
    createNewProduct($_POST, $imageName);
    // $currentDate = date('l jS \of F Y h:i:s A');
    header('Location: http://localhost/SD-Online-shop/?page=allProducts');
}else{
    echo "Fail";
}