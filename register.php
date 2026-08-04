<?php
include "connect.php";

$thongbao = "";

if(isset($_POST["dangky"])){

    $ho = trim($_POST["ho"] ?? "");
    $ten = trim($_POST["ten"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $sdt = trim($_POST["sdt"] ?? "");
    $matkhau = $_POST["matkhau"] ?? "";
    $xnmk = $_POST["xnmk"] ?? "";

    if($ho == "" || $ten == "" || $email == "" || $sdt == "" || $matkhau == "" || $xnmk == ""){
        $thongbao = "Vui lòng nhập đầy đủ thông tin!";
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $thongbao = "Email khong hop le!";
    }else if(!preg_match('/^[0-9]{9,11}$/', $sdt)){
        $thongbao = "So dien thoai khong hop le!";
    }else if(strlen($matkhau) < 6){
        $thongbao = "Mat khau phai co it nhat 6 ky tu!";
    }else if($matkhau != $xnmk){
        $thongbao = "Mật khẩu xác nhận không khớp!";
    }else{

        $stmt = $conn->prepare("SELECT id FROM taikhoan WHERE email = ? LIMIT 1");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $kq = $stmt->get_result();

        if($kq->num_rows > 0){
            $thongbao = "Email đã tồn tại!";
        }else{

            $hoten = $ho . " " . $ten;
            $matkhau_hash = password_hash($matkhau, PASSWORD_DEFAULT);

            $insert = $conn->prepare("
                INSERT INTO taikhoan(email, matkhau, hoten, sodienthoai)
                VALUES(?, ?, ?, ?)
            ");
            $insert->bind_param("ssss", $email, $matkhau_hash, $hoten, $sdt);

            if($insert->execute()){
    echo "<script>
        alert('Đăng ký thành công!');
        window.location.href='login.php';
    </script>";
    exit();
}else{
                $thongbao = "Lỗi đăng ký!";
            }
            $insert->close();
        }
        $stmt->close();
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Đăng ký tài khoản</title>

<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{margin:0;padding:0;box-sizing:border-box}

body{
    font-family:'Inter', sans-serif;
    background:#f5f5f5;
    color:#111827;
}

.register-page{
    width:55%;
    margin:45px auto;
}

.heading{
    text-align: center;
}

.heading h1{
    font-size:38px;
    font-weight:800;
}

.heading p{
    color:#6b7280;
    margin-top:8px;
    font-size:17px;
    margin-bottom: 20px;
}


.box{
    background:white;
    padding:34px;
    border-radius:18px;
    margin-bottom:28px;
    border:1px solid #eee;
    box-shadow:0 4px 14px rgba(0,0,0,0.06);
}

.box h2{
    font-size:21px;
    font-weight:800;
    margin-bottom:22px;
    padding-bottom:14px;
    border-bottom:1px solid #eee;
}

.row{
    display:flex;
    gap:24px;
}

.form-group{
    width:100%;
    margin-bottom:22px;
}

label{
    display:block;
    font-size:14px;
    font-weight:800;
    margin-bottom:10px;
}

input{
    width:100%;
    height:56px;
    border:1px solid #d1d5db;
    border-radius:12px;
    padding:0 16px;
    font-size:16px;
    outline:none;
    font-family:'Inter', sans-serif;
}

input:focus{
    border-color:#111;
    box-shadow:0 0 0 3px rgba(0,0,0,0.08);
}

.message{
    padding:14px 18px;
    border-radius:12px;
    margin-bottom:20px;
    font-weight:600;
    background:#fee2e2;
    color:#b91c1c;
}

.success{
    padding:14px 18px;
    border-radius:12px;
    margin-bottom:20px;
    font-weight:600;
    background:#dcfce7;
    color:#15803d;
}

.btn-register{
    width:100%;
    height:58px;
    background:#000;
    color:white;
    border:none;
    border-radius:14px;
    font-size:16px;
    font-weight:800;
    cursor:pointer;
}

.login-link{
    text-align:center;
    margin-top:20px;
    color:#6b7280;
}

.login-link a{
    color:#000;
    font-weight:800;
    text-decoration:none;
}

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
</style>
</head>

<body>

<a href="/WebShopBongDa/" class="home-icon">
    <i class="fa fa-home"></i>
</a>

<div class="register-page">

    <div class="heading">
        <h1>ĐĂNG KÝ</h1>
        <p>Tham gia cộng đồng TKSport để nhận nhiều ưu đãi hấp dẫn</p>
    </div>

    <?php 
    if($thongbao != ""){
        if(strpos($thongbao, "thành công") !== false){
            echo "<div class='success'>$thongbao</div>";
        }else{
            echo "<div class='message'>$thongbao</div>";
        }
    }
    ?>

    <form method="post">

        <div class="box">
            <h2>THÔNG TIN CÁ NHÂN CỦA BẠN</h2>

            <div class="row">
                <div class="form-group">
                    <label>HỌ</label>
                    <input type="text" name="ho" required>
                </div>

                <div class="form-group">
                    <label>TÊN</label>
                    <input type="text" name="ten" required>
                </div>
            </div>

            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" name="email" required>
            </div>

            <div class="form-group">
                <label>SỐ ĐIỆN THOẠI</label>
                <input type="text" name="sdt" required>
            </div>
        </div>

        <div class="box">
            <h2>MẬT KHẨU CỦA BẠN</h2>

            <div class="row">
                <div class="form-group">
                    <label>MẬT KHẨU</label>
                    <input type="password" name="matkhau" placeholder="••••••••" required>
                </div>

                <div class="form-group">
                    <label>XÁC NHẬN MẬT KHẨU</label>
                    <input type="password" name="xnmk" placeholder="••••••••" required>
                </div>
            </div>
        </div>

        <button type="submit" name="dangky" class="btn-register">
            ĐĂNG KÝ
        </button>

        <div class="login-link">
            Đã có tài khoản?
            <a href="login.php">Đăng nhập ngay</a>
        </div>

    </form>

</div>

</body>
</html>

<?php include "footer.php" ?>
