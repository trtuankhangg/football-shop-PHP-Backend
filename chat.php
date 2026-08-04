<?php

$conn = new mysqli("localhost","root","","qlbh");

if($conn->connect_error){
    die("Kết nối lỗi: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

$openChat = false;

if(isset($_POST['send'])){

    $msg = trim($_POST['message']);

    if($msg != ""){

        $stmt = $conn->prepare("INSERT INTO chat(noidung, loai) VALUES(?, 'user')");
        $stmt->bind_param("s", $msg);
        $stmt->execute();

        $reply = "Cảm ơn bạn đã liên hệ shop. Chúng tôi sẽ hỗ trợ lại bạn sớm nhất!";

        $stmt2 = $conn->prepare("INSERT INTO chat(noidung, loai) VALUES(?, 'bot')");
        $stmt2->bind_param("s", $reply);
        $stmt2->execute();

        $openChat = true;
    }
}

$result = $conn->query("
    SELECT * FROM chat
    ORDER BY id DESC
    LIMIT 20
");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chat</title>

<style>

.open-button{
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 85px;
    height: 85px;
    border-radius: 50%;
    border: none;
    overflow: hidden;
    cursor: pointer;
    z-index: 999;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
}

.open-button img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.chat-popup{
    display: none;
    position: fixed;
    bottom: 120px;
    right: 20px;
    width: 320px;
    z-index: 1000;
}

.form-container{
    background: white;
    border-radius: 15px;
    overflow: hidden;
    border: 1px solid #ddd;
}

.chat-header{
    background: #f5f5f5;
    padding: 15px;
    font-weight: bold;
    border-bottom: 1px solid #ddd;
}

.chat-body{
    height: 300px;
    overflow-y: auto;
    padding: 12px;
    background: #fafafa;
    display: flex;
    flex-direction: column-reverse;
}

.msg{
    padding: 10px 14px;
    border-radius: 15px;
    margin-bottom: 10px;
    max-width: 80%;
    word-wrap: break-word;
}

.user{
    background: black;
    color: white;
    margin-left: auto;
}

.bot{
    background: #e5e5e5;
    color: black;
    margin-right: auto;
}

textarea{
    width: 100%;
    height: 35px;
    border: none;
    border-top: 1px solid #ddd;
    padding: 10px;
    outline: none;
    resize: none;
}

.chat-btn{
    display: flex;
}

.close-btn{
    flex: 1;
    padding: 12px;
    background: red;
    color: white;
    border: none;
    cursor: pointer;
}

.send-btn{
    flex: 1;
    padding: 12px;
    background: #f0f0f0;
    border: none;
    cursor: pointer;
}

</style>

</head>

<body>

<button class="open-button" onclick="openForm()">
    <img src="img/cskh.jpg">
</button>

<div class="chat-popup" id="myForm">
    <form class="form-container" method="post">

        <div class="chat-header">
            Hỗ trợ khách hàng
        </div>

        <div class="chat-body">

            <?php while($row = $result->fetch_assoc()){ ?>

                <div class="msg <?php echo $row['loai']; ?>">
                    <?php echo htmlspecialchars($row['noidung']); ?>
                </div>

            <?php } ?>

        </div>

        <textarea name="message" placeholder="Nhập tin nhắn..." required></textarea>

        <div class="chat-btn">

            <button type="button" class="close-btn" onclick="closeForm()">
                Đóng
            </button>

            <button type="submit" name="send" class="send-btn">
                Gửi
            </button>
        </div>
    </form>
</div>
<script>
function openForm(){
    document.getElementById("myForm").style.display = "block";
}

function closeForm(){
    document.getElementById("myForm").style.display = "none";
}

window.addEventListener("load", function(){
    <?php if($openChat){ ?>
        document.getElementById("myForm").style.display = "block";
    <?php } ?>
});

</script>
</body>
</html>