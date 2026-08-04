<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "connect.php";

function e($value){
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

if(!isset($_SESSION["cart"]) || !is_array($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}

$message = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $action = $_POST["action"] ?? "";

    if($action === "add"){
        $product_id = (int)($_POST["product_id"] ?? 0);
        $size = trim($_POST["size"] ?? "");
        $qty = max(1, (int)($_POST["qty"] ?? 1));

        $stmt = $conn->prepare("SELECT id, ten_sp, gia, anh FROM allproducts WHERE id = ? LIMIT 1");
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();

        if($product){
            $cart_key = $product_id . "_" . md5($size);
            $price = (int)$product["gia"] * 0.8;

            if(isset($_SESSION["cart"][$cart_key])){
                $_SESSION["cart"][$cart_key]["qty"] += $qty;
            }else{
                $_SESSION["cart"][$cart_key] = array(
                    "product_id" => $product_id,
                    "name" => $product["ten_sp"],
                    "price" => $price,
                    "image" => $product["anh"],
                    "size" => $size,
                    "qty" => $qty
                );
            }

            header("Location: cart.php?added=1");
            exit();
        }

        $message = "Sản phẩm không tồn tại.";
    }

    if($action === "update"){
        foreach(($_POST["qty"] ?? array()) as $key => $qty){
            if(isset($_SESSION["cart"][$key])){
                $_SESSION["cart"][$key]["qty"] = max(1, (int)$qty);
            }
        }

        header("Location: cart.php?updated=1");
        exit();
    }

    if($action === "remove"){
        $key = $_POST["key"] ?? "";
        unset($_SESSION["cart"][$key]);
        header("Location: cart.php?removed=1");
        exit();
    }

    if($action === "clear"){
        $_SESSION["cart"] = array();
        header("Location: cart.php?cleared=1");
        exit();
    }
}

if(isset($_GET["added"])){
    $message = "Đã thêm sản phẩm vào giỏ hàng.";
}else if(isset($_GET["updated"])){
    $message = "Đã cập nhật giỏ hàng.";
}else if(isset($_GET["removed"])){
    $message = "Đã xóa sản phẩm khỏi giỏ hàng.";
}else if(isset($_GET["cleared"])){
    $message = "Đã xóa toàn bộ giỏ hàng.";
}

$cart = $_SESSION["cart"];
$total = 0;

foreach($cart as $item){
    $total += (int)$item["price"] * (int)$item["qty"];
}
?>

<?php include "header.php"; ?>

<style>
body {
    font-family: 'Inter', sans-serif;
    background: #f5f5f5;
    padding: 10px;
}

.cart-page{
    width:90%;
    margin:35px auto;
    background:#fff;
    border-radius:10px;
    padding:25px;
    box-shadow:0 4px 14px rgba(0,0,0,0.08);
}

.cart-title{
    font-size:30px;
    margin-bottom:20px;
}

.cart-message{
    padding:12px 15px;
    margin-bottom:18px;
    border-radius:8px;
    background:#dcfce7;
    color:#166534;
    font-weight:700;
}

.cart-table{
    width:100%;
    border-collapse:collapse;
}

.cart-table th,
.cart-table td{
    padding:14px;
    border-bottom:1px solid #eee;
    text-align:left;
    vertical-align:middle;
}

.cart-table th{
    background:#f5f5f5;
}

.cart-product{
    display:flex;
    align-items:center;
    gap:14px;
}

.cart-product img{
    width:90px;
    height:90px;
    object-fit:cover;
    border-radius:8px;
}

.cart-product strong{
    display:block;
    margin-bottom:6px;
}

.qty-input{
    width:75px;
    height:38px;
    padding:0 8px;
    border:1px solid #ccc;
    border-radius:6px;
}

.cart-actions{
    display:flex;
    justify-content:space-between;
    align-items:center;
    gap:15px;
    margin-top:22px;
    flex-wrap:wrap;
}

.cart-buttons{
    display:flex;
    gap:10px;
    flex-wrap:wrap;
}

.btn{
    display:inline-block;
    border:none;
    border-radius:7px;
    padding:11px 18px;
    cursor:pointer;
    text-decoration:none;
    font-weight:700;
    font-family:'Inter', sans-serif;
}

.btn-update{
    background:#e5e7eb;
    color:#111;
}

.btn-remove{
    background:#fee2e2;
    color:red;
}

.btn-clear{
    background:#f3f4f6;
    color:red;
}

.btn-shop{
    background:#e5e7eb;
    color:#111;
}

.btn-checkout{
    background:#16a34a;
    color:white;
}

.cart-total{
    font-size:22px;
    font-weight:800;
    color:#e60000;
}

.empty-cart{
    text-align:center;
    padding:45px 10px;
}

.empty-cart p{
    margin-bottom:20px;
    color:#555;
}

@media(max-width:768px){
    .cart-table,
    .cart-table thead,
    .cart-table tbody,
    .cart-table tr,
    .cart-table th,
    .cart-table td{
        display:block;
        width:100%;
    }

    .cart-table thead{
        display:none;
    }

    .cart-table tr{
        border:1px solid #eee;
        border-radius:8px;
        margin-bottom:14px;
        padding:12px;
    }

    .cart-table td{
        border-bottom:none;
        padding:8px 0;
    }

    .cart-product{
        align-items:flex-start;
    }
}
</style>

<div class="cart-page">
    <h1 class="cart-title">Giỏ hàng</h1>

    <?php if($message != ""){ ?>
        <div class="cart-message"><?php echo e($message); ?></div>
    <?php } ?>

    <?php if(empty($cart)){ ?>
        <div class="empty-cart">
            <p>Giỏ hàng của bạn đang trống!</p>
            <a href="all-products.php" class="btn btn-shop">Tiếp tục mua sắm</a>
        </div>
    <?php } else { ?>
        <form method="post">
            <input type="hidden" name="action" value="update">

            <table class="cart-table">
                <thead>
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($cart as $key => $item){
                        $line_total = (int)$item["price"] * (int)$item["qty"];
                    ?>
                        <tr>
                            <td>
                                <div class="cart-product">
                                    <img src="<?php echo e($item["image"]); ?>" alt="<?php echo e($item["name"]); ?>">
                                    <div>
                                        <strong><?php echo e($item["name"]); ?></strong>
                                        <span>Size: <?php echo $item["size"] !== "" ? e($item["size"]) : "Không có"; ?></span>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo number_format((int)$item["price"]); ?> VND</td>
                            <td>
                                <input class="qty-input" type="number" name="qty[<?php echo e($key); ?>]" value="<?php echo (int)$item["qty"]; ?>" min="1">
                            </td>
                            <td><?php echo number_format($line_total); ?> VND</td>
                            <td>
                                <button class="btn btn-remove" type="submit" form="remove-<?php echo e($key); ?>">Xóa</button>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <div class="cart-actions">
                <div class="cart-total">
                    Tổng tiền: <?php echo number_format($total); ?> VND
                </div>

                <div class="cart-buttons">
                    <a href="all-products.php" class="btn btn-shop">Tiếp tục mua sắm</a>
                    <button type="submit" class="btn btn-update">Cập nhật giỏ</button>
                    <button type="submit" class="btn btn-clear" form="clear-cart">Xóa giỏ hàng</button>
                    <button type="submit" class="btn btn-checkout" form="checkout-cart">Thanh toán</button>
                </div>
            </div>
        </form>

        <?php foreach($cart as $key => $item){ ?>
            <form id="remove-<?php echo e($key); ?>" method="post">
                <input type="hidden" name="action" value="remove">
                <input type="hidden" name="key" value="<?php echo e($key); ?>">
            </form>
        <?php } ?>

        <form id="clear-cart" method="post">
            <input type="hidden" name="action" value="clear">
        </form>

        <form id="checkout-cart" method="post" action="checkout.php">
            <input type="hidden" name="checkout_cart" value="1">
        </form>
    <?php } ?>
</div>

<?php include "footer.php"; ?>
