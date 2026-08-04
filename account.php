<?php
session_start();

if(!isset($_SESSION["email"])){
    header("Location: login.php");
    exit();
}
?>

<?php include "header.php"; ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tài khoản của tôi</title>

<style>
body{
    background:#f5f5f5;
    font-family:'Inter', sans-serif;
    padding: 10px;
}

.account-page{
    width:90%;
    margin:40px auto;
    display:flex;
    gap:25px;
}

.sidebar{
    width:280px;
    background:white;
    border-radius:12px;
    padding:25px;
    box-shadow:0 2px 10px rgba(0,0,0,0.06);
}

.avatar{
    width:70px;
    height:70px;
    border-radius:50%;
    background:#111;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-size:30px;
    font-weight:bold;
    margin-bottom:15px;
}

.user-name{
    font-weight:700;
    font-size:18px;
    margin-bottom:5px;
}

.user-email{
    color:#777;
    font-size:14px;
    margin-bottom:25px;
}

.sidebar a{
    display:block;
    text-decoration:none;
    color:#222;
    padding:13px 0;
    border-bottom:1px solid #eee;
    font-weight:500;
}

.sidebar a:hover{
    color:red;
}

.content{
    flex:1;
    background:white;
    border-radius:12px;
    padding:30px;
    box-shadow:0 2px 10px rgba(0,0,0,0.06);
}

.content h1{
    font-size:28px;
    margin-bottom:10px;
}

.desc{
    color:#666;
    margin-bottom:30px;
}

.info-grid{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:20px;
}

.info-card{
    border:1px solid #eee;
    border-radius:10px;
    padding:20px;
    background:#fafafa;
}

.info-card h3{
    font-size:16px;
    margin-bottom:8px;
    color:#555;
}

.info-card p{
    font-size:18px;
    font-weight:600;
}

.logout-btn{
    display:inline-block;
    margin-top:30px;
    background:#111;
    color:white;
    text-decoration:none;
    padding:13px 28px;
    border-radius:8px;
    font-weight:bold;
}

.logout-btn:hover{
    background:red;
}
</style>
</head>

<body>

<div class="account-page">

    <div class="sidebar">
        <div class="avatar">
            <?php echo strtoupper(substr($_SESSION["email"], 0, 1)); ?>
        </div>

        <div class="user-name">Tài khoản của tôi</div>
        <div class="user-email"><?php echo $_SESSION["email"]; ?></div>

        <a href="#">Thông tin cá nhân</a>
        <a href="#">Đơn hàng của tôi</a>
        <a href="#">Sản phẩm yêu thích</a>
        <a href="#">Đổi mật khẩu</a>
        <a href="logout.php">Đăng xuất</a>
    </div>

    <div class="content">
        <h1>Thông tin tài khoản</h1>
        <p class="desc">Quản lý thông tin cá nhân và theo dõi hoạt động mua hàng của bạn.</p>

        <div class="info-grid">
            <div class="info-card">
                <h3>Email</h3>
                <p><?php echo $_SESSION["email"]; ?></p>
            </div>

            <div class="info-card">
                <h3>Trạng thái</h3>
                <p>Đang hoạt động</p>
            </div>

            <div class="info-card">
                <h3>Hạng thành viên</h3>
                <p>Khách hàng mới</p>
            </div>

            <div class="info-card">
                <h3>Ưu đãi</h3>
                <p>Sale 50%</p>
            </div>
        </div>

        <a href="logout.php" class="logout-btn">ĐĂNG XUẤT</a>
    </div>

</div>

</body>
</html>

<?php include "footer.php"; ?>