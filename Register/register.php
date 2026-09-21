<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký thành viên</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
        }

        .box-register {
            width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px 25px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color: #333;
        }

        .row {
            display: flex;
            gap: 15px;
            margin-bottom: 12px;
        }

        .col {
            flex: 1;
        }

        label {
            display: block;
            margin-bottom: 4px;
            font-weight: bold;
            font-size: 13px;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 6px 8px;
            box-sizing: border-box;
            border: 1px solid #aaa;
            border-radius: 4px;
        }

        .gender-group {
            margin: 15px 0;
        }

        .btn-submit {
            width: 100%;
            padding: 10px;
            background-color: #9c27b0;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #7b1fa2;
        }

        /* Khung thông báo theo yêu cầu Slide 39 */
        .message-box {
            width: 500px;
            margin: 0 auto 15px auto;
            padding: 12px;
            border: 2px solid #9c27b0;
            border-radius: 6px;
            background-color: #fff;
            text-align: center;
            font-weight: bold;
            color: #9c27b0;
        }

        .message-error {
            color: #d81b60;
        }
    </style>
</head>
<body>

<?php
$fullname = "";
$username = "";
$email = "";
$phone = "";
$gender = "Male";
$message = "";
$is_error = false;

if (isset($_POST['register'])) {
    $fullname = trim($_POST['fullname'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $gender = $_POST['gender'] ?? 'Male';

    // Slide 39: Nếu password và confirm password không trùng nhau
    if ($password !== $confirm_password) {
        $is_error = true;
        $message = "Incorrect confirm password!";
    } else {
        // Đúng: in ra thông báo với full name và email
        $is_error = false;
        $message = "Thank " . htmlspecialchars($fullname) . " !, please confirm registration in your email: " . htmlspecialchars($email);
    }
}
?>

<?php if (!empty($message)): ?>
    <div class="message-box <?php if ($is_error) echo 'message-error'; ?>">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<div class="box-register">
    <h2>Registration</h2>

    <form action="register.php" method="POST">
        <div class="row">
            <div class="col">
                <label>Full Name</label>
                <input type="text" name="fullname" placeholder="Nguyen Van Dat" value="<?php echo htmlspecialchars($fullname); ?>" required>
            </div>
            <div class="col">
                <label>Username</label>
                <input type="text" name="username" placeholder="datnv" value="<?php echo htmlspecialchars($username); ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label>Email</label>
                <input type="email" name="email" placeholder="dat.nv.65cntt@ntu.edu.vn" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            <div class="col">
                <label>Phone Number</label>
                <input type="text" name="phone" placeholder="0901234567" value="<?php echo htmlspecialchars($phone); ?>" required>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label>Password</label>
                <input type="password" name="password" placeholder="•••" required>
            </div>
            <div class="col">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" placeholder="•••" required>
            </div>
        </div>

        <div class="gender-group">
            <label>Gender</label>
            <label><input type="radio" name="gender" value="Male" <?php if ($gender === 'Male') echo 'checked'; ?>> Male</label>
            &nbsp;
            <label><input type="radio" name="gender" value="Female" <?php if ($gender === 'Female') echo 'checked'; ?>> Female</label>
            &nbsp;
            <label><input type="radio" name="gender" value="Prefer not to say" <?php if ($gender === 'Prefer not to say') echo 'checked'; ?>> Prefer not to say</label>
        </div>

        <input type="submit" name="register" value="Register" class="btn-submit">
    </form>
</div>

</body>
</html>
