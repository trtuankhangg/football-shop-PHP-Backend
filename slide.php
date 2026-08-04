<?php include "header.php"; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tuan Khang</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
* {
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background: #f5f5f5;
    margin: 0;
    padding: 10px;
}

/* FLASH SALE */
.flash-title {
    display: flex;
    align-items: center;
    gap: 15px;
    margin: 15px 0 25px;
    padding-left: 10px;
}

.flash-title h1 {
    color: #e60000;
    margin: 0;
    font-size: 30px;
    font-weight: 700;
}

.countdown {
    display: flex;
    align-items: center;
    gap: 5px;
}

.time-box {
    background: #111;
    color: white;
    padding: 5px 11px;
    border-radius: 5px;
    font-size: 18px;
    font-weight: bold;
}

.time-dot {
    background: transparent;
    color: #111;
    padding: 0;
}

/* PRODUCT GRID */
.products-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 18px;
    margin-bottom: 20px;
}

.product {
    background: #fff;
    padding: 15px;
    text-align: center;
    border-radius: 10px;
    transition: 0.3s;
    position: relative;
    border: 1px solid #eee;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

.sale-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: #e60000;
    color: white;
    padding: 5px 9px;
    border-radius: 5px;
    font-size: 13px;
    font-weight: 700;
}

.product img {
    width: 100%;
    height: 350px;
    object-fit: cover;
    border-radius: 8px;
}

.product h3 {
    font-size: 16px;
    margin: 12px 0;
    color: #222;
    min-height: 40px;
}

.old-price {
    text-decoration: line-through;
    color: gray;
    margin: 5px 0;
}

.new-price {
    color: #e60000;
    font-weight: bold;
    font-size: 18px;
    margin: 6px 0 12px;
}

.btn-buy {
    background: #16a34a;
    color: white;
    border: none;
    padding: 10px 17px;
    cursor: pointer;
    border-radius: 6px;
    font-weight: bold;
}

.btn-buy:hover {
    background: #15803d;
}

@media (max-width: 1000px) {
    .products-container {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 650px) {
    .products-container {
        grid-template-columns: repeat(2, 1fr);
    }

    .flash-title {
        flex-wrap: wrap;
    }

    .flash-title h1 {
        font-size: 24px;
    }

    .product img {
        height: 230px;
    }
}
</style>
</head>

<body>

<div class="flash-title">
    <h1>⚡ FLASH SALE 50%</h1>

<!--
    <div class="countdown">
        <div class="time-box" id="hour">00</div>
        <div class="time-box time-dot">:</div>
        <div class="time-box" id="minute">00</div>
        <div class="time-box time-dot">:</div>
        <div class="time-box" id="second">00</div>
    </div> -->
</div>

<?php
$conn = new mysqli("localhost", "root", "", "qlbh");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

$sql = "SELECT id, ten_sp, anh, gia FROM allproducts WHERE danhmuc = 'boao' LIMIT 10";
$result = $conn->query($sql);

echo "<div class='products-container'>";

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $gia_cu = $row["gia"];
        $gia_sale = $gia_cu * 0.5;
        $link = "product-detail.php?id=" . (int)$row["id"];

        echo "<div class='product'>";
        echo "<div class='sale-badge'>-50%</div>";
        echo "<img src='" . htmlspecialchars($row["anh"]) . "' alt='Sản phẩm'>";
        echo "<h3>" . htmlspecialchars($row["ten_sp"]) . "</h3>";
        echo "<p class='old-price'>" . number_format($gia_cu, 0, ',', '.') . " VNĐ</p>";
        echo "<p class='new-price'>" . number_format($gia_sale, 0, ',', '.') . " VNĐ</p>";
        echo "<button class='btn-buy' onclick=\"window.location.href='" . $link . "'\">Mua ngay</button>";
        echo "</div>";
    }
} else {
    echo "<p>Không có sản phẩm nào</p>";
}

echo "</div>";

$conn->close();
?>

<!-- <script>
var countDownDate = new Date("Mar 10, 2027 23:59:59").getTime();

function updateCountdown(){
    var now = new Date().getTime();
    var distance = countDownDate - now;

    if (distance < 0) {
        document.getElementById("hour").innerHTML = "00";
        document.getElementById("minute").innerHTML = "00";
        document.getElementById("second").innerHTML = "00";
        return;
    }

    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("hour").innerHTML = String(hours).padStart(2,'0');
    document.getElementById("minute").innerHTML = String(minutes).padStart(2,'0');
    document.getElementById("second").innerHTML = String(seconds).padStart(2,'0');
}

updateCountdown();
setInterval(updateCountdown, 1000);
</script>
-->

</body>
</html>

<?php include "chat.php"; ?>
<?php include "footer.php"; ?>
