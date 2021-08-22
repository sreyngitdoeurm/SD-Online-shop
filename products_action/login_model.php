<?php
    include_once('../database/database.php');
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        userLogin($_POST);
    }