<?php include "header.php" ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Giày bóng đá</title>

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
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

.product {
    background: white;
    text-align: center;
    border-radius: 8px;
    transition: 0.3s;
    overflow: hidden;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 16px rgba(0,0,0,0.15);
}

.product-link {
    text-decoration: none;
    color: inherit;
    display: block;
    padding: 15px;
}

.product img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 6px;
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
    margin-bottom: 15px;
}

.btn-buy:hover {
    background: #15803d;
}
</style>
</head>

<body>

<h2 class="category-title">GIÀY BÓNG ĐÁ</h2>

<?php
$conn = new mysqli("localhost", "root", "", "qlbh");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT * FROM allproducts 
        WHERE danhmuc = 'giay' 
        ORDER BY id ASC 
        LIMIT 20";

$result = $conn->query($sql);

echo "<div class='products-container'>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        $link = "product-detail.php?id=" . $row["id"];

        echo "<div class='product'>";

        echo "<a href='" . $link . "' class='product-link'>";
        echo "<img src='" . $row["anh"] . "' alt='Sản phẩm'>";
        echo "<h3>" . $row["ten_sp"] . "</h3>";
        echo "<p class='price'>" . number_format($row["gia"]) . " VNĐ</p>";

        if (!empty($row["size"])) {
            echo "<p class='size'>Size: " . $row["size"] . "</p>";
        }

        echo "</a>";

        echo "<button class='btn-buy' onclick=\"window.location.href='".$link."'\">Mua ngay</button>";

        echo "</div>";
    }
} else {
    echo "<p>Không có sản phẩm nào</p>";
}

echo "</div>";

$conn->close();
?>

</body>
</html>
<?php include "chat.php" ?>
<?php include "footer.php" ?>
