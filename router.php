<?php
$page = isset($_GET['go'])
        ? $_GET['go']
        : 'home';

switch($page){
    case 'home':
        include("home.php");
        break;

    case 'sp':
        include("featured-products.php");
        break;

    case 'tintuc':
        include("news.php");
        break;

    case 'video':
        include("video.php");
        break;

    case 'quangcao':
        include("advertisement.php");
        break;

    case 'jacket':
        include("jackets.php");
        break;
    
    case 'giay':
        include("shoes.php");
        break;
    case 'allsp':
        include("all-products.php");
        break;
    default:
        include("home.php");
        break;
}
?>