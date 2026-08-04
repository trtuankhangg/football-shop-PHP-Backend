<style>
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
    justify-content: space-between;
    gap: 20px;
    background: linear-gradient(135deg, #ff1f1f, #ff7a00);
    padding: 22px 35px;
    margin-bottom: 30px;
    margin-top: 30px;
    border-radius: 18px;
    box-shadow: 0 10px 25px rgba(255, 60, 0, 0.35);
    position: relative;
    overflow: hidden;
}

.flash-title::before {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(255,255,255,0.18);
    border-radius: 50%;
    top: -70px;
    left: -60px;
}

.flash-title::after {
    content: "SALE 30%";
    position: absolute;
    right: -35px;
    top: 15px;
    background: #fff;
    color: #e60000;
    font-weight: 800;
    padding: 8px 45px;
    transform: rotate(35deg);
    font-size: 14px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}

.flash-title h1 {
    color: white;
    margin: 0;
    font-size: 34px;
    font-weight: 800;
    letter-spacing: 2px;
    text-shadow: 2px 3px 8px rgba(0,0,0,0.3);
    z-index: 1;
}

.flash-title h1::before {
    content: "⚡ ";
}

.countdown {
    display: flex;
    align-items: center;
    gap: 3px;
    z-index: 1;
    transform: translateX(-60px);
}

.time-box{
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0,0,0,0.75);
    color: white;
    border-radius: 12px;
    font-size: 24px;
    font-weight: 800;
    box-shadow:
        inset 0 -3px 0 rgba(255,255,255,0.15),
        0 5px 12px rgba(0,0,0,0.25);
}

.time-box:nth-child(2),
.time-box:nth-child(4) {
    background: transparent;
    box-shadow: none;
    min-width: auto;
    padding: 0;
    font-size: 28px;
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
    border-radius: 8px;
    transition: 0.3s;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

.product img {
    width: 100%;
    height: 350px;
    object-fit: cover;
}

.product h3 {
    font-size: 16px;
    margin: 12px 0;
    color: #222;
}

.old-price {
    text-decoration: line-through;
    color: gray;
    margin: 5px 0;
}

.new-price {
    color: #e60000;
    font-weight: bold;
    font-size: 17px;
    margin: 6px 0 12px;
}

.btn-buy {
    background: #16a34a;
    color: white;
    border: none;
    padding: 9px 15px;
    cursor: pointer;
    border-radius: 5px;
    font-weight: bold;
}

.btn-buy:hover {
    background: #15803d;
}

@media (max-width: 1000px) {
    .products-container {
        grid-template-columns: repeat(3, 1fr);
    }

    .flash-title {
        flex-direction: column;
    }
}

@media (max-width: 650px) {
    .products-container {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>




<div class="flash-title">
    <h1>FLASH SALE</h1>

    <div class="countdown">
        <div class="time-box" id="hour">00</div>
        <div class="time-box">:</div>
        <div class="time-box" id="minute">00</div>
        <div class="time-box">:</div>
        <div class="time-box" id="second">00</div>
    </div>
</div>

<?php
$conn = new mysqli("localhost", "root", "", "qlbh");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT id, ten_sp, anh, gia FROM allproducts WHERE danhmuc = 'boao' LIMIT 10";
$result = $conn->query($sql);

echo "<div class='products-container'>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $gia_cu = $row["gia"];
        $gia_sale = $gia_cu * 0.7;
        $link = "product-detail.php?id=" . (int)$row["id"];

        echo "<div class='product'>";
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

<script>
var countDownDate = new Date("Mar 10, 2027 23:59:59").getTime();

function updateCountdown() {
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

    document.getElementById("hour").innerHTML = String(hours).padStart(2, '0');
    document.getElementById("minute").innerHTML = String(minutes).padStart(2, '0');
    document.getElementById("second").innerHTML = String(seconds).padStart(2, '0');
}

updateCountdown();

setInterval(updateCountdown, 1000);
</script>




