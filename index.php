
<?php
    include_once('partail/header.php');
    include_once('partail/navbar.php');
    if (isset($_GET['page'])){
        $isPageExist = file_exists('pages/' . $_GET['page'] . '.php');
        $page = 'pages/'. $_GET['page'] . '.php';
        if($isPageExist){
            include_once($page);
        }
        
    }else{
        
        include_once('pages/home.php');
    }
    include_once('partail/footer.php'); 
    


    
