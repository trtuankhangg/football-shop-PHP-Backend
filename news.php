<?php include "header.php" ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tin tức</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family: 'Inter', sans-serif;
    background:#f5f5f5;
    padding:10px;
}

.container{
    width:calc(100% - 60px);
    margin:20px 30px;
    display:flex;
    background:#fff;
    padding:15px;
    gap:20px;
    align-items:stretch;
}

.left{
    width:30%;
    display:flex;
    flex-direction:column;
    gap:10px;
}

.news-item{
    display:flex;
    flex:1;
    background:#fff;
    cursor:pointer;
    transition:0.3s;
}

.news-item img{
    width:150px;
    height:100%;
    object-fit:cover;
    margin-right:10px;
}

.news-item p{
    font-size:15px;
    line-height:1.4;
}

.right{
    width:70%;
    cursor:pointer;
    transition:0.3s;
}

.main-img{
    height:350px;
}

.main-img img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.right h2{
    margin-top:12px;
    font-size:24px;
}

.right p{
    margin-top:8px;
    color:#555;
    line-height:1.5;
}

.right small{
    display:block;
    margin-top:10px;
    color:#777;
}

.news-item:hover,
.right:hover{
    background:#dbd6d6;
}

.news-item img,
.right img{
    transition:0.3s;
}

.news-item:hover img,
.right:hover img{
    filter:brightness(0.9);
}

.ac{
    width:calc(100% - 60px);
    margin:20px 30px;
    background:#fff;
    padding:15px;
}

.ac img{
    width:100%;
    height:450px;
    object-fit:cover;
    display:block;
    border-radius:6px;
    cursor:pointer;
    transition:0.3s;
}

.ac img:hover{
    filter:brightness(0.9);
    transform:scale(1.01);
}
</style>

</head>
<body>

<?php
$conn = new mysqli("localhost", "root", "", "qlbh");

if ($conn->connect_error) {
    die("Kết nối lỗi: " . $conn->connect_error);
}

echo "<div class='container'>";

$sql_left = "SELECT * FROM tintuc WHERE chuyenmuc_tt = 1 LIMIT 3";
$result_left = $conn->query($sql_left);

echo "<div class='left'>";

if ($result_left->num_rows > 0) {
    while($row = $result_left->fetch_assoc()) {
        echo "<div class='news-item'>";
        echo "<img src='img/" . $row["anh_tt"] . "'>";
        echo "<p>" . $row["tieude_tt"] . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>Không có tin bên trái</p>";
}

echo "</div>";

$sql_right = "SELECT * FROM tintuc WHERE chuyenmuc_tt = 2 LIMIT 1";
$result_right = $conn->query($sql_right);

echo "<div class='right'>";

if ($result_right->num_rows > 0) {
    $row = $result_right->fetch_assoc();

    echo "<div class='main-img'>";
    echo "<img src='img/" . $row["anh_tt"] . "'>";
    echo "</div>";

    echo "<h2>" . $row["tieude_tt"] . "</h2>";
    echo "<p>" . $row["tomtat_tt"] . "</p>";
    echo "<small>Tác giả: " . $row["tacgia_tt"] . "</small>";
} else {
    echo "<p>Không có tin nổi bật</p>";
}

echo "</div>";
echo "</div>";

$conn->close();
?>
<div class="ac">
        <img src="img/acmilan-clb.webp">
    </div>
</body>
</html>
<?php include "footer.php" ?>
