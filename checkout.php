<?php include "header.php"; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thanh toán</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Inter', sans-serif;
    background:linear-gradient(135deg,#f5f5f5,#eeeeee);
    padding:10px;
}

.checkout{
    width:85%;
    margin:10px auto;
    background:white;
    padding:0;
    border-radius:18px;
    display:grid;
    grid-template-columns: 1fr 1.1fr;
    overflow:hidden;
    box-shadow:0 15px 40px rgba(0,0,0,0.12);
}

.checkout h1{
    grid-column:1 / 3;
    padding:15px 35px;
    margin:0;
    font-size:32px;
    background:#111;
    color:white;
    letter-spacing:1px;
}

.product-box{
    display:block;
    background:#fafafa;
    padding:15px;
    border-right:1px solid #eee;
}

.product-box img{
    width:100%;
    height:520px;
    object-fit:cover;
    border-radius:16px;
    border:none;
    box-shadow:0 10px 25px rgba(0,0,0,0.18);
    margin-bottom:10px;
}

.info{
    background:white;
    padding:20px;
    border-radius:14px;
    box-shadow:0 5px 18px rgba(0,0,0,0.08);
}

.info p{
    margin-bottom:13px;
    font-size:16px;
    display:flex;
    justify-content:space-between;
    border-bottom:1px dashed #ddd;
    padding-bottom:10px;
}

.info p:last-child{
    border-bottom:none;
}

.total{
    color:#e60000 !important;
    font-size:24px !important;
    font-weight:800;
    margin-top:15px;
}

form{
    padding:35px;
}

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:700;
    color:#222;
}

.form-group input,
.form-group textarea{
    width:100%;
    padding:14px 15px;
    border:1px solid #ddd;
    border-radius:10px;
    font-size:15px;
    outline:none;
    transition:0.3s;
    background:#fafafa;
}

.form-group input:focus,
.form-group textarea:focus{
    border-color:#111;
    background:white;
    box-shadow:0 0 0 3px rgba(0,0,0,0.08);
}

.btn-order{
    width:100%;
    background:linear-gradient(135deg,#111,#ff1f1f);
    color:white;
    border:none;
    padding:15px 30px;
    font-size:20px;
    font-family:'Inter', sans-serif;
    font-weight:600;
    border-radius:12px;
    cursor:pointer;
    letter-spacing:0.5px;
    transition:0.3s;
    margin-top:10px;
}

.btn-order:hover{
    transform:translateY(-2px);
    box-shadow:0 8px 20px rgba(230,0,0,0.35);
}

.form-group textarea{
    font-family:'Inter', sans-serif;
}

.shop-trust h3{
    margin-bottom:15px;
    font-size:18px;
    color:#22c55e;
}

.trust-item{
    font-size:18px;
    color:#22c55e;
    margin-bottom:12px;
    line-height:1.6;
    font-weight:700;
    padding-left:5px;
}

.shop-trust{
    margin-top:45px;
}

.checkout-item{
    display:flex;
    gap:12px;
    padding:12px 0;
    border-bottom:1px solid #eee;
}

.checkout-item img{
    width:92px;
    height:92px;
    object-fit:cover;
    border-radius:10px;
    box-shadow:none;
    margin-bottom:0;
}

.checkout-item h3{
    font-size:16px;
    margin-bottom:8px;
}

.checkout-item p{
    display:block;
    border-bottom:none;
    padding-bottom:0;
    margin-bottom:6px;
    font-size:14px;
}
</style>
</head>

<body>

<?php
$checkout_items = array();

if(isset($_POST["checkout_cart"]) && isset($_SESSION["cart"]) && is_array($_SESSION["cart"])){
    foreach($_SESSION["cart"] as $item){
        $checkout_items[] = array(
            "ten_sp" => $item["name"] ?? "",
            "gia" => (int)($item["price"] ?? 0),
            "size" => $item["size"] ?? "",
            "qty" => max(1, (int)($item["qty"] ?? 1)),
            "hinh" => $item["image"] ?? ""
        );
    }
}else if(isset($_POST["ten_sp"])){
    $checkout_items[] = array(
        "ten_sp" => $_POST["ten_sp"] ?? "",
        "gia" => (int)($_POST["gia"] ?? 0),
        "size" => $_POST["size"] ?? "",
        "qty" => max(1, (int)($_POST["qty"] ?? 1)),
        "hinh" => $_POST["hinh"] ?? ""
    );
}

$tong = 0;
foreach($checkout_items as $item){
    $tong += (int)$item["gia"] * (int)$item["qty"];
}

function e_checkout($value){
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}
?>

<div class="checkout">
    <h1>Thanh toán</h1>

    <div class="product-box">
        <div class="info">
            <?php if(empty($checkout_items)){ ?>
                <p>Giỏ hàng đang trống.</p>
            <?php } ?>

            <?php foreach($checkout_items as $item){
                $line_total = (int)$item["gia"] * (int)$item["qty"];
            ?>
                <div class="checkout-item">
                    <img src="<?php echo e_checkout($item["hinh"]); ?>" alt="<?php echo e_checkout($item["ten_sp"]); ?>">
                    <div>
                        <h3><?php echo e_checkout($item["ten_sp"]); ?></h3>
                        <p><b>Size:</b> <?php echo $item["size"] !== "" ? e_checkout($item["size"]) : "Khong co"; ?></p>
                        <p><b>Số lượng:</b> <?php echo (int)$item["qty"]; ?></p>
                        <p><b>Giá:</b> <?php echo number_format((int)$item["gia"]); ?> VND</p>
                        <p><b>Thành tiền:</b> <?php echo number_format($line_total); ?> VND</p>
                    </div>
                </div>
            <?php } ?>

            <p class="total">Tổng tiền: <?php echo number_format($tong); ?> VND</p>
        </div>
    </div>
    <form>
        <div class="form-group">
            <label>THÔNG TIN GIAO HÀNG</label>
            <input type="text" placeholder="Nhập họ tên">
        </div>

        <div class="form-group">
        
            <input type="text" placeholder="Nhập số điện thoại">
        </div>

        <div class="form-group">
        
            <textarea rows="4" placeholder="Nhập địa chỉ"></textarea>
        </div>

        <button type="button" class="btn-order" onclick="alert('Đặt hàng thành công!')">
            XÁC NHẬN ĐẶT HÀNG
        </button>
        <div class="shop-trust">
    <div class="trust-item">
        ✓ Cam kết sản phẩm chính hãng chất lượng cao
    </div>

    <div class="trust-item">
        ✓ Hỗ trợ đổi size nhanh chóng nếu mang không vừa
    </div>

    <div class="trust-item">
        ✓ Kiểm tra hàng trước khi thanh toán
    </div>

    <div class="trust-item">
        ✓ Tuấn Khang Sport luôn đặt trải nghiệm khách hàng lên hàng đầu
    </div>

    <div class="trust-item">
        ✓ Hỗ trợ tư vấn nhiệt tình cho người chơi bóng đá
    </div>
</div>
    </form>
</div>

</body>
</html>

<?php include "footer.php"; ?>

