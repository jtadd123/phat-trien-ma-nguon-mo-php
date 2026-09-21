<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Kết quả đăng nhập</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 40px;
        }

        .result-box {
            width: 360px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        /* Yêu cầu Slide 35: Tahoma, màu đỏ */
        .msg-tahoma-red {
            font-family: Tahoma, sans-serif;
            color: red;
            font-size: 16px;
            font-weight: bold;
            margin: 15px 0;
        }

        .btn-back {
            display: inline-block;
            margin-top: 10px;
            padding: 6px 16px;
            background-color: #6c757d;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 13px;
        }

        .btn-back:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>

<div class="result-box">
    <h3>Kết quả đăng nhập</h3>

    <?php
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $username = trim($_POST['user']);
        $password = trim($_POST['pass']);

        // Slide 35 & 37: Kiểm tra admin / 12345
        if ($username === "admin" && $password === "12345") {
            echo "<div class='msg-tahoma-red'>welcome, " . htmlspecialchars($username) . "</div>";
            echo "<p>Đăng nhập thành công!</p>";
            echo "<a href='login.php' class='btn-back'>Đăng xuất</a>";
        } else {
            echo "<div class='msg-tahoma-red'>Username hoặc password sai. Vui lòng nhập lại</div>";
            echo "<a href='login.php' class='btn-back'>Quay lại</a>";
        }
    } else {
        echo "<div class='msg-tahoma-red'>Vui lòng đăng nhập từ form!</div>";
        echo "<a href='login.php' class='btn-back'>Đến trang đăng nhập</a>";
    }
    ?>
</div>

</body>
</html>
