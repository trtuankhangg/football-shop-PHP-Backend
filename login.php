<?php
session_start();
include "connect.php";

$thongbao = "";

if (isset($_POST["dangnhap"])) {
    $email = trim($_POST["email"] ?? "");
    $matkhau = $_POST["matkhau"] ?? "";

    $stmt = $conn->prepare("SELECT id, email, matkhau FROM taikhoan WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    $user = $result->fetch_assoc();
    $dangnhap_dung = false;

    if($user){
        $hash = $user["matkhau"];
        $dangnhap_dung = password_verify($matkhau, $hash);

        if(!$dangnhap_dung && hash_equals($hash, $matkhau)){
            $dangnhap_dung = true;
            $newHash = password_hash($matkhau, PASSWORD_DEFAULT);
            $update = $conn->prepare("UPDATE taikhoan SET matkhau = ? WHERE id = ?");
            $update->bind_param("si", $newHash, $user["id"]);
            $update->execute();
            $update->close();
        }
    }

    if ($dangnhap_dung) {
        session_regenerate_id(true);
        $_SESSION["user_id"] = (int)$user["id"];
        $_SESSION["email"] = $user["email"];
        header("Location: /WebShopBongDa/");
        exit();
    } else {
        $thongbao = "Email hoặc mật khẩu không đúng!";
    }
    $stmt->close();
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng nhập</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- ICON -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Inter', sans-serif;
    background:#fff;
    padding:10px;
}

/* ===== HOME ICON ===== */
.home-icon{
    position:fixed;
    top:20px;
    left:20px;
    width:45px;
    height:45px;
    background:black;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    border-radius:50%;
    font-size:20px;
    text-decoration:none;
    z-index:999;
    transition:0.3s;
}

.home-icon:hover{
    background:#2563eb;
    transform:scale(1.1);
}

/* ===== LAYOUT ===== */
.login-page{
    width:70%;
    margin:40px auto;
    display:flex;
    gap:40px;
}

/* ===== BOX ===== */
.login-box,
.register-box{
    width:50%;
    border-radius:20px;
    padding:40px;
}

.login-box{
    background:white;
    border:1px solid #eee;
    box-shadow:0 2px 10px rgba(0,0,0,0.08);
}

.register-box{
    background:#f7f7f7;
}

/* ===== TEXT ===== */
h1{
    font-size:30px;
    font-weight:700;
    margin-bottom:10px;
}

.sub{
    color:#6b7280;
    margin-bottom:30px;
}

/* ===== INPUT ===== */
label{
    display:block;
    font-weight:600;
    margin-bottom:8px;
}

input{
    width:100%;
    height:55px;
    border:1.5px solid #111;
    border-radius:12px;
    padding:0 15px;
    margin-bottom:20px;
    font-size:16px;
}

/* ===== PASSWORD ROW ===== */
.password-row{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.password-row a{
    font-size:13px;
    color:#2563eb;
    text-decoration:none;
}

/* ===== REMEMBER ===== */
.remember{
    display:flex;
    align-items:center;
    gap:8px;
    margin-bottom:25px;
    font-size:14px;
}

.remember input{
    width:18px;
    height:18px;
    margin:0;
}

.remember span{
    line-height:18px;
}

/* ===== BUTTON ===== */
.btn-login{
    width:100%;
    height:55px;
    background:black;
    color:white;
    border:none;
    border-radius:12px;
    font-weight:bold;
    letter-spacing:2px;
    cursor:pointer;
}

.btn-register{
    width:100%;
    height:55px;
    border:2px solid black;
    background:white;
    border-radius:12px;
    font-weight:bold;
    cursor:pointer;
}

/* ===== MESSAGE ===== */
.message{
    color:red;
    margin-bottom:15px;
}

.line{
    border-top:1px dashed #ddd;
    margin-top:30px;
}
</style>

</head>

<body>

<!-- 🔥 ICON HOME -->
<a href="/WebShopBongDa/" class="home-icon">
    <i class="fa fa-home"></i>
</a>

<div class="login-page">

    <div class="login-box">
        <h1>ĐĂNG NHẬP TÀI KHOẢN !</h1>
        <p class="sub">Khách hàng đã đăng ký</p>

        <?php if($thongbao != ""){ ?>
            <p class="message"><?php echo $thongbao; ?></p>
        <?php } ?>

        <form method="post">

            <label>EMAIL</label>
            <input type="email" name="email" placeholder="email@example.com" required>

            <div class="password-row">
                <label>MẬT KHẨU</label>
                <a href="#">Quên mật khẩu?</a>
            </div>

            <input type="password" name="matkhau" placeholder="••••••••" required>

            <div class="remember">
                <input type="checkbox" id="remember">
                <span>Ghi nhớ tôi?</span>
            </div>

            <button type="submit" name="dangnhap" class="btn-login">
                ĐĂNG NHẬP
            </button>

        </form>

        <div class="line"></div>
    </div>

    <div class="register-box">
        <h1>ĐĂNG NHẬP</h1>

        <p class="sub">
            Đăng nhập để theo dõi đơn hàng, lưu danh sách sản phẩm yêu thích,
            nhận nhiều ưu đãi hấp dẫn.
        </p>

        <button class="btn-register"
            onclick="window.location.href='register.php'">
            ĐĂNG KÝ
        </button>
    </div>

</div>

</body>
</html>

<?php include "footer.php" ?>
