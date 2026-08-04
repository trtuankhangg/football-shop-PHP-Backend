<?php include "header.php" ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Áo khoác đội tuyển</title>

<style>
body {
    font-family: 'Inter', sans-serif;
    background: #f5f5f5;
    padding: 10px;
}

.category-title {
    color: red;
    margin: 35px 0 20px;
    font-size: 28px;
}

.products-container {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
}

.product {
    background: white;
    padding: 12px;
    text-align: center;
    border-radius: 8px;
    transition: 0.3s;
}

.product:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0,0,0,0.2);
}

.product img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    border-radius: 5px;
}

.product h3 {
    margin: 10px 0;
    font-size: 16px;
}

.price {
    color: red;
    font-weight: bold;
    margin: 8px 0;
}

.size {
    font-size: 14px;
    color: #555;
    margin-bottom: 10px;
}

.btn-buy {
    background: #16a34a;
    color: white;
    border: none;
    padding: 8px 14px;
    cursor: pointer;
    border-radius: 5px;
}

.btn-buy:hover {
    background: #15803d;
}
</style>
</head>

<body>

<h2 class="category-title">ÁO KHOÁC ĐỘI TUYỂN</h2>

<?php
$conn = new mysqli("localhost", "root", "", "qlbh");

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT * FROM allproducts 
        WHERE loai = 'doituyen' 
        AND ten_sp LIKE '%Áo khoác%' 
        LIMIT 10";

$result = $conn->query($sql);

echo "<div class='products-container'>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product'>";
        
        echo "<img src='".$row["anh"]."'>";
        
        echo "<h3>".$row["ten_sp"]."</h3>";
        
        echo "<p class='price'>".number_format($row["gia"])." VNĐ</p>";
        
        // 🔥 HIỂN THỊ SIZE
        if (!empty($row["size"])) {
            echo "<p class='size'>Size: ".$row["size"]."</p>";
        }
        
        // 🔥 NÚT MUA
        $link = "product-detail.php?id=" . (int)$row["id"];
        echo "<button class='btn-buy' onclick=\"window.location.href='".$link."'\">Mua ngay</button>";
        
        echo "</div>";
    }
} else {
    echo "Không có sản phẩm";
}

echo "</div>";

$conn->close();
?>

</body>
</html>
<?php include "chat.php" ?>
<?php include "footer.php" ?>
