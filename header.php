<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$cart_count = 0;
if(isset($_SESSION["cart"]) && is_array($_SESSION["cart"])){
    foreach($_SESSION["cart"] as $cart_item){
        $cart_count += (int)($cart_item["qty"] ?? 0);
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shop Áo Đấu CLB</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Inter', sans-serif;
}

.header{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:15px 40px;
    background:#fff;
    border-bottom:1px solid #eee;
}

.logo img{
    height:50px;
}

.menu{
    list-style:none;
    display:flex;
}

.menu li{
    margin:0 25px;
}

.menu li a{
    text-decoration:none;
    color:#222;
    font-weight:600;
    font-size:20px;
    padding-bottom:6px;
    transition:0.3s;
}

.menu li a:hover,
.menu li a.active{
    color:#000;
    border-bottom:3px solid #000;
}

.actions{
    display:flex;
    align-items:center;
}

.search input{
    padding:8px 12px;
    border:1px solid #ddd;
    border-radius:6px;
    font-family:'Inter', sans-serif;
    outline:none;
}

.search input:focus{
    border-color:#000;
}

.actions i{
    margin-left:25px;
    cursor:pointer;
    font-size:22px;
    transition:0.3s;
}

.actions i:hover{
    transform:scale(1.1);
}

.actions a{
    color:#222;
    text-decoration:none;
}

.cart-link{
    position:relative;
    display:inline-flex;
    align-items:center;
    color:#222;
    text-decoration:none;
}

.cart-link i{
    margin-left:25px;
}

.cart-count{
    position:absolute;
    top:-9px;
    right:-10px;
    min-width:18px;
    height:18px;
    padding:0 5px;
    border-radius:999px;
    background:#e60000;
    color:white;
    font-size:12px;
    font-weight:700;
    line-height:18px;
    text-align:center;
}

.user-box{
    display:flex;
    align-items:center;
    gap:6px;
    margin-left:25px;
    color:#222;
    text-decoration:none;
    font-size:14px;
    font-weight:600;
}

.user-box i{
    margin-left:0;
}

.user-box.logged i{
    color:#2563eb;
}

.user-box.logged:hover i{
    color:#1d4ed8;
}

.user-box.logged span{
    color:#2563eb;
}

.banner{
    width:100%;
}

.banner img{
    width:100%;
    height:350px;
    object-fit:cover;
}
</style>
</head>

<body>

<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="header">

    <div class="logo">
        <a href="/WebShopBongDa/">
            <img src="img/logo.jpeg">
        </a>
    </div>

    <ul class="menu">

        <li>
            <a href="/WebShopBongDa/"
            class="<?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
                Trang chủ
            </a>
        </li>

        <li>
            <a href="all-products.php"
            class="<?php echo ($current_page == 'all-products.php') ? 'active' : ''; ?>">
                Sản phẩm
            </a>
        </li>

        <li>
            <a href="jackets.php"
            class="<?php echo ($current_page == 'jackets.php') ? 'active' : ''; ?>">
                Áo khoác
            </a>
        </li>

        <li>
            <a href="shoes.php"
            class="<?php echo ($current_page == 'shoes.php') ? 'active' : ''; ?>">
                Giày bóng đá
            </a>
        </li>

        <li>
            <a href="news.php"
            class="<?php echo ($current_page == 'news.php') ? 'active' : ''; ?>">
                Tin tức
            </a>
        </li>

        <li>
            <a href="slide.php"
            class="<?php echo ($current_page == 'slide.php') ? 'active' : ''; ?>">
                Sale 50%
            </a>
        </li>

    </ul>

    <div class="actions">

        <div class="search">
            <input type="text" placeholder="Tìm kiếm...">
        </div>

        <a href="cart.php" class="cart-link" title="Gio hang">
            <i class="fa fa-shopping-cart"></i>
            <?php if($cart_count > 0){ ?>
                <span class="cart-count"><?php echo $cart_count; ?></span>
            <?php } ?>
        </a>

        <?php if(isset($_SESSION["email"])) { ?>

            <a href="account.php" class="user-box logged">
                <i class="fa fa-user-circle-o"></i>
                <span>
                    <?php
                    $ten = explode("@", $_SESSION["email"])[0];
                    echo substr($ten, 0, 4) . "...";
                    ?>
                </span>
            </a>

        <?php } else { ?>

            <a href="login.php" class="user-box">
                <i class="fa fa-user-circle-o"></i>
            </a>

        <?php } ?>

        <i class="fa fa-phone"></i>

    </div>

</header>

<section class="banner">
    <img src="img/banner.jpeg">
</section>
