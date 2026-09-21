<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập hệ thống</title>
    <style>
        body {
            font-family: Tahoma, Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 40px;
        }

        .login-box {
            width: 320px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-box h3 {
            text-align: center;
            margin-top: 0;
            color: #333;
        }

        .form-row {
            margin-bottom: 12px;
        }

        .form-row label {
            display: block;
            margin-bottom: 4px;
            font-size: 13px;
            font-weight: bold;
        }

        .form-row input[type="text"],
        .form-row input[type="password"] {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
            border: 1px solid #aaa;
            border-radius: 3px;
        }

        .btn-login {
            width: 100%;
            padding: 8px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-family: Tahoma, sans-serif;
        }

        .btn-login:hover {
            background-color: #0056b3;
        }

        .hint {
            margin-top: 12px;
            font-size: 12px;
            color: #666;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h3>Đăng nhập hệ thống</h3>

    <!-- Form chuẩn Slide 36: action="checklogin.php" method="POST" -->
    <form action="checklogin.php" method="POST">
        <div class="form-row">
            <label for="user">Username:</label>
            <input type="text" id="user" name="user" size="15" required>
        </div>

        <div class="form-row">
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" size="15" required>
        </div>

        <input type="submit" name="submit" value="Login" class="btn-login">
    </form>

    <div class="hint">
        (Gợi ý: <code>admin</code> / <code>12345</code>)
    </div>
</div>

</body>
</html>
