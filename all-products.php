<?php include "header.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tuan Khang Sport</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Inter', sans-serif;
    background: #f5f5f5;
    padding: 10px;
}

.category-title {
    margin: 35px 0 20px;
    color: #e60000;
    font-size: 28px;
    border-left: 6px solid #e60000;
    padding-left: 12px;
}

.products-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.product {
    background: white;
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
    height: 270px;
    object-fit: cover;
}

.product h3 {
    font-size: 16px;
    margin: 12px 0;
    color: #222;
}

.price {
    color: #e60000;
    font-weight: bold;
    font-size: 17px;
    margin-bottom: 12px;
}

.size {
    font-size: 14px;
    color: #555;
    margin-bottom: 12px;
}

.btn-buy {
    background: #16a34a;
    color: white;
    border: none;
    padding: 9px 16px;
    border-radius: 5px;
    cursor: pointer;
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
}
</style>
</head>

<body>

<?php
$conn = new mysqli("localhost", "root", "", "qlbh");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

function hienThiSanPham($conn, $title, $danhmuc, $limit) {
    echo "<h2 class='category-title'>$title</h2>";
    echo "<div class='products-container'>";

    $sql = "SELECT * FROM allproducts WHERE danhmuc = '$danhmuc' LIMIT $limit";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='product'>";
            echo "<img src='" . $row["anh"] . "' alt='Sản phẩm'>";
            echo "<h3>" . $row["ten_sp"] . "</h3>";
            echo "<p class='price'>" . number_format($row["gia"]) . " VNĐ</p>";

            if ($row["size"] != "") {
                echo "<p class='size'>Size: " . $row["size"] . "</p>";
            }

            $link = "product-detail.php?id=" . (int)$row["id"];
            echo "<button class='btn-buy' onclick=\"window.location.href='" . $link . "'\">Mua ngay</button>";
            echo "</div>";
        }
    } else {
        echo "<p>Không có sản phẩm nào</p>";
    }

    echo "</div>";
}

hienThiSanPham($conn, "BỘ ÁO QUẦN BÓNG ĐÁ", "boao", 10);
hienThiSanPham($conn, "GIÀY BÓNG ĐÁ", "giay", 5);
hienThiSanPham($conn, "PHỤ KIỆN BÓNG ĐÁ", "phukien", 5);

$conn->close();
?>

</body>
</html>
<?php include "chat.php" ?>
<?php include "footer.php" ?>
