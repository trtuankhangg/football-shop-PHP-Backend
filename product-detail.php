<?php include "header.php" ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chi tiet san pham</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Inter', sans-serif;
    background:#f5f5f5;
    padding:10px;
}

.product-detail{
    width:90%;
    margin:40px auto;
    display:flex;
    gap:40px;
    padding:25px;
    background:white;
    border-radius:10px;
}

.left{
    width:50%;
}

/* MAIN IMAGE */
.main-wrap{
    position:relative;
}

.main-img{
    width:100%;
    height:550px;
    object-fit:cover;
    border-radius:10px;
    margin-bottom:10px;
}

/* ARROW */
.arrow{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    width:40px;
    height:40px;
    border:none;
    border-radius:50%;
    background:rgba(0,0,0,0.22);
    color:white;
    font-size:26px;
    font-weight:bold;
    cursor:pointer;
    z-index:10;
    transition:0.25s;
}

.arrow:hover{
    background:red;
    transform:translateY(-50%) scale(1.06);
}

.left-arrow{
    left:-25px;
}

.right-arrow{
    right:-25px;
}

.thumb{
    display:flex;
    gap:10px;
    border-top:1px solid #e5e5e5;
    padding-top:12px;
    margin-top:10px;
    flex-wrap:wrap;
}

.thumb img{
    width:23%;
    height:140px;
    object-fit:cover;
    border-radius:6px;
    cursor:pointer;
    border:2px solid transparent;
    transition:0.3s;
}

.thumb img:hover{
    border:2px solid red;
}

/* RIGHT */
.right{
    width:50%;
    border-left:1px solid #ddd;
    padding-left:25px;
}

.right h1{
    font-size:26px;
    margin-bottom:15px;
}

.brand{
    color:#007bff;
    font-weight:bold;
    margin-bottom:12px;
}

.price-box{
    margin:15px 0;
}

.price{
    color:red;
    font-size:28px;
    font-weight:bold;
}

.old-price{
    text-decoration:line-through;
    color:#999;
    margin-left:10px;
    font-size:18px;
}

.discount{
    background:red;
    color:white;
    padding:4px 8px;
    border-radius:4px;
    font-size:14px;
    margin-left:10px;
    font-weight:bold;
}

.desc{
    margin:20px 0;
    color:#555;
    line-height:1.7;
}

.size-box{
    margin-top:20px;
}

.sizes{
    display:flex;
    gap:10px;
    margin-top:10px;
    flex-wrap:wrap;
}

.size-item{
    padding:8px 15px;
    border:1px solid #ccc;
    border-radius:5px;
    cursor:pointer;
    background:white;
    font-size:16px;
    transition:0.3s;
}

.size-item:hover{
    border-color:red;
    color:red;
}

.size-item.active{
    background:red;
    color:white;
    border-color:red;
}

.buy-area{
    margin-top:20px;
}

.buy-box{
    display:flex;
    align-items:center;
    gap:10px;
    flex-wrap:wrap;
}

.qty-btn{
    width:35px;
    height:40px;
    border:none;
    background:#ddd;
    cursor:pointer;
    font-size:18px;
}

.qty{
    width:60px;
    height:40px;
    text-align:center;
    border:1px solid #ccc;
}

.btn-buy{
    background:red;
    color:white;
    border:none;
    padding:12px 30px;
    font-size:16px;
    border-radius:5px;
    cursor:pointer;
    font-weight:bold;
}

.btn-buy:hover{
    background:#cc0000;
}

.btn-cart{
    background:#111;
}

.btn-cart:hover{
    background:#333;
}

.error-size{
    color:red;
    font-style:italic;
    margin-top:8px;
    display:none;
}

.detail-desc{
    width:90%;
    margin:0 auto 40px;
    background:white;
    padding:25px;
    border-radius:10px;
}

.detail-desc h2{
    font-size:24px;
    margin-bottom:15px;
}

.desc-content{
    max-height:260px;
    overflow:hidden;
    line-height:1.8;
    color:#444;
    position:relative;
    transition:0.3s;
}

.desc-content::after{
    content:"";
    position:absolute;
    bottom:0;
    left:0;
    width:100%;
    height:60px;
    background:linear-gradient(to bottom, transparent, white);
}

.desc-content.active{
    max-height:2000px;
}

.desc-content.active::after{
    display:none;
}

.desc-content p{
    margin-bottom:12px;
}

.spec-table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

.spec-table th,
.spec-table td{
    border:1px solid #ddd;
    padding:10px;
    text-align:left;
}

.spec-table th{
    background:#f3f3f3;
}

.toggle-btn{
    display:block;
    margin:15px auto 0;
    background:none;
    border:none;
    color:red;
    font-weight:bold;
    cursor:pointer;
    font-size:16px;
}

.not-found{
    width:90%;
    margin:40px auto;
    background:white;
    padding:25px;
    border-radius:10px;
}
</style>
</head>

<body>

<?php
include "connect.php";

$id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

$stmt = $conn->prepare("SELECT * FROM allproducts WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();

$result = $stmt->get_result();

$row = $result->fetch_assoc();

$stmt->close();

if(!$row){

    echo "<div class='not-found'>San pham khong ton tai.</div>";

    include "footer.php";

    exit;
}

$gia_cu = (int)$row["gia"];

$gia_sale = $gia_cu * 0.8;

$sizes = array_filter(array_map("trim", explode(",", $row["size"] ?? "")));

$thuong_hieu = $row["thuong_hieu"] ?? "";

if(($row["danhmuc"] ?? "") === "giay"){

    $ten_parts = preg_split('/\s+/', trim($row["ten_sp"] ?? ""));

    $thuong_hieu = $ten_parts[0] ?? "";
}

$mota_ngan = $row["mota"] ?? "";

$mota_chitiet = !empty($row["mota_chitiet"])
    ? $row["mota_chitiet"]
    : $mota_ngan;

$uu_diem = $row["uu_diem"] ?? "";

$chat_lieu = $row["chat_lieu"] ?? "";

$loai_san = $row["loai_san"] ?? "";

$images = array();

$checkTable = $conn->query("SHOW TABLES LIKE 'product_images'");

if($checkTable && $checkTable->num_rows > 0){

    $imgStmt = $conn->prepare("
        SELECT image_path
        FROM product_images
        WHERE product_id = ?
        ORDER BY sort_order ASC, id ASC
    ");

    $imgStmt->bind_param("i", $id);

    $imgStmt->execute();

    $imgResult = $imgStmt->get_result();

    while($imgRow = $imgResult->fetch_assoc()){

        if(!empty($imgRow["image_path"])){

            $images[] = $imgRow["image_path"];
        }
    }

    $imgStmt->close();
}

if(empty($images) && !empty($row["anh"])){

    $images[] = $row["anh"];
}

$mainImage = $images[0] ?? "";

function e($value){

    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}
?>

<div class="product-detail">

    <div class="left">

        <div class="main-wrap">

            <button
                class="arrow left-arrow"
                type="button"
                onclick="prevImg()"
            >
                ‹
            </button>

            <img
                id="mainImg"
                class="main-img"
                src="<?php echo e($mainImage); ?>"
                alt="<?php echo e($row["ten_sp"]); ?>"
            >

            <button
                class="arrow right-arrow"
                type="button"
                onclick="nextImg()"
            >
                ›
            </button>

        </div>

        <div class="thumb">

            <?php foreach($images as $image){ ?>

                <img
                    src="<?php echo e($image); ?>"
                    onclick="doiAnh(this)"
                    alt="<?php echo e($row["ten_sp"]); ?>"
                >

            <?php } ?>

        </div>

    </div>

    <div class="right">

        <h1><?php echo e($row["ten_sp"]); ?></h1>

        <p class="brand">
            Thương hiệu:
            <?php echo !empty($thuong_hieu)
                ? e($thuong_hieu)
                : "Dang cap nhat"; ?>
        </p>

        <div class="price-box">

            <span class="price">
                <?php echo number_format($gia_sale); ?> VND
            </span>

            <span class="old-price">
                <?php echo number_format($gia_cu); ?> VND
            </span>

            <span class="discount">-20%</span>

        </div>

        <div class="desc">
            <p><?php echo nl2br(e($mota_ngan)); ?></p>
        </div>

        <?php if(!empty($sizes)){ ?>

            <div class="size-box">

                <p><b>Chọn size:</b></p>

                <div class="sizes">

                    <?php foreach($sizes as $s){ ?>

                        <span
                            class="size-item"
                            onclick="chonSize(this)"
                        >
                            <?php echo e($s); ?>
                        </span>

                    <?php } ?>

                </div>

                <input type="hidden" id="selectedSize">

            </div>

        <?php } else { ?>

            <input type="hidden" id="selectedSize" value="">

        <?php } ?>

        <div class="buy-area">

            <div class="buy-box">

                <button
                    class="qty-btn"
                    onclick="giam()"
                    type="button"
                >
                    -
                </button>

                <input
                    id="qty"
                    type="number"
                    value="1"
                    min="1"
                    class="qty"
                >

                <button
                    class="qty-btn"
                    onclick="tang()"
                    type="button"
                >
                    +
                </button>

                <form
                    id="buyForm"
                    action="checkout.php"
                    method="post"
                >

                    <input
                        type="hidden"
                        name="ten_sp"
                        value="<?php echo e($row["ten_sp"]); ?>"
                    >

                    <input
                        type="hidden"
                        name="gia"
                        value="<?php echo e($gia_sale); ?>"
                    >

                    <input
                        type="hidden"
                        name="size"
                        id="formSize"
                    >

                    <input
                        type="hidden"
                        name="qty"
                        id="formQty"
                    >

                    <input
                        type="hidden"
                        name="hinh"
                        value="<?php echo e($mainImage); ?>"
                    >

                    <button
                        type="button"
                        class="btn-buy"
                        onclick="chonMua()"
                    >
                        CHỌN MUA
                    </button>

                </form>

                <form
                    id="cartForm"
                    action="cart.php"
                    method="post"
                >
                    <input type="hidden" name="action" value="add">
                    <input type="hidden" name="product_id" value="<?php echo (int)$row["id"]; ?>">
                    <input type="hidden" name="size" id="cartSize">
                    <input type="hidden" name="qty" id="cartQty">

                    <button
                        type="button"
                        class="btn-buy btn-cart"
                        onclick="themGioHang()"
                    >
                        THÊM VÀO GIỎ
                    </button>
                </form>

            </div>

            <p id="errorSize" class="error-size">
                Vui lòng chọn size!
            </p>

        </div>

    </div>

</div>

<div class="detail-desc">

    <h2>Mô tả chi tiết sản phẩm</h2>

    <div id="descContent" class="desc-content">

        <p><?php echo nl2br(e($mota_chitiet)); ?></p>

        <h3>Thông số sản phẩm</h3>

        <table class="spec-table">

            <tr>
                <th>Thuộc tính</th>
                <th>Giá trị</th>
            </tr>

            <tr>
                <td>Thương hiệu</td>
                <td>
                    <?php echo !empty($thuong_hieu)
                        ? e($thuong_hieu)
                        : "Dang cap nhat"; ?>
                </td>
            </tr>

            <tr>
                <td>Ưu điểm</td>
                <td>
                    <?php echo !empty($uu_diem)
                        ? e($uu_diem)
                        : "Dang cap nhat"; ?>
                </td>
            </tr>

            <tr>
                <td>Chất liệu</td>
                <td>
                    <?php echo !empty($chat_lieu)
                        ? e($chat_lieu)
                        : "Dang cap nhat"; ?>
                </td>
            </tr>

            <tr>
                <td>Loại sân</td>
                <td>
                    <?php echo !empty($loai_san)
                        ? e($loai_san)
                        : "Dang cap nhat"; ?>
                </td>
            </tr>

        </table>

    </div>

    <button
        id="toggleBtn"
        class="toggle-btn"
        onclick="toggleDesc()"
    >
        Xem thêm
    </button>

</div>

<script>

let currentIndex = 0;

let images = <?php echo json_encode($images); ?>;

function showImg(index){

    if(images.length == 0) return;

    if(index < 0){

        currentIndex = images.length - 1;
    }
    else if(index >= images.length){

        currentIndex = 0;
    }
    else{

        currentIndex = index;
    }

    document.getElementById("mainImg").src = images[currentIndex];
}

function doiAnh(img){

    document.getElementById("mainImg").src = img.src;

    currentIndex = images.indexOf(img.getAttribute("src"));
}

function nextImg(){

    showImg(currentIndex + 1);
}

function prevImg(){

    showImg(currentIndex - 1);
}

function chonSize(el){

    let all = document.querySelectorAll(".size-item");

    all.forEach(function(item){

        item.classList.remove("active");
    });

    el.classList.add("active");

    document.getElementById("selectedSize").value = el.innerText;

    document.getElementById("errorSize").style.display = "none";
}

function tang(){

    let q = document.getElementById("qty");

    q.value = parseInt(q.value) + 1;
}

function giam(){

    let q = document.getElementById("qty");

    if(q.value > 1){

        q.value--;
    }
}

document.getElementById("qty").addEventListener("input", function(){

    if(this.value < 1){

        this.value = 1;
    }
});

function chonMua(){

    let hasSize = document.querySelectorAll(".size-item").length > 0;

    let size = document.getElementById("selectedSize").value;

    let qty = document.getElementById("qty").value;

    let error = document.getElementById("errorSize");

    if(hasSize && size == ""){

        error.style.display = "block";

        return;
    }

    error.style.display = "none";

    document.getElementById("formSize").value = size;

    document.getElementById("formQty").value = qty;

    document.getElementById("buyForm").submit();
}

function themGioHang(){

    let hasSize = document.querySelectorAll(".size-item").length > 0;

    let size = document.getElementById("selectedSize").value;

    let qty = document.getElementById("qty").value;

    let error = document.getElementById("errorSize");

    if(hasSize && size == ""){

        error.style.display = "block";

        return;
    }

    error.style.display = "none";

    document.getElementById("cartSize").value = size;

    document.getElementById("cartQty").value = qty;

    document.getElementById("cartForm").submit();
}

function toggleDesc(){

    let desc = document.getElementById("descContent");

    let btn = document.getElementById("toggleBtn");

    desc.classList.toggle("active");

    if(desc.classList.contains("active")){

        btn.innerText = "Thu gọn nội dung";
    }
    else{

        btn.innerText = "Xem thêm";
    }
}

</script>

<?php
$conn->close();
?>

</body>
</html>

<?php include "footer.php" ?>
