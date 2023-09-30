<?php
// ini_set('display_errors', '1');
include_once 'includes/header.php';

$page = $_GET['page']; 

# body
if (isset($_GET)){
    switch ($_GET['page']) {
        default:
            include_once 'pages/main.php';
        break;
    
        case 'lk':
            include_once "pages/lk.php";
        break;

        case 'blog':
            include_once "pages/blog.php";
        break;

        case 'auth':
            include_once 'pages/auth.php';
    
    }
}


include_once "includes/footer.html";
?>