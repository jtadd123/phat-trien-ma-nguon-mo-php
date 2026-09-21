<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Phiếu điều tra thông tin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            padding: 30px;
        }

        .container {
            width: 550px;
            margin: 0 auto;
            background: #ffffff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        h3 {
            margin-top: 0;
            color: #333;
        }

        .required {
            color: red;
        }

        .form-table td {
            padding: 6px;
        }

        .form-table input[type="text"],
        .form-table input[type="email"],
        .form-table select {
            padding: 5px;
            border: 1px solid #aaa;
            border-radius: 3px;
        }

        .btn {
            padding: 5px 14px;
            cursor: pointer;
        }

        .result-box {
            margin-top: 20px;
            padding-top: 15px;
            border-top: 1px dashed #999;
            color: #1a237e;
        }

        .result-box h4 {
            margin: 0 0 10px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h3>PHIẾU ĐIỀU TRA THÔNG TIN</h3>

    <?php
    $hoten = $_POST['hoten'] ?? '';
    $gioitinh = $_POST['gioitinh'] ?? 'Nam';
    $diachi = $_POST['diachi'] ?? '';
    $email = $_POST['email'] ?? '';
    $dotuoi = $_POST['dotuoi'] ?? 'Dưới 30 tuổi';
    $sothich = $_POST['sothich'] ?? [];

    $is_submitted = (isset($_POST['gui']));
    ?>

    <form action="sticky_form.php" method="POST">
        <table class="form-table">
            <!-- Slide 41: Sticky textfield -->
            <tr>
                <td>Họ tên:</td>
                <td>
                    <input type="text" name="hoten" size="30" 
                           value="<?php if(isset($_POST['hoten'])) echo htmlspecialchars($_POST['hoten']); ?>" required>
                    <span class="required">*</span>
                </td>
            </tr>

            <tr>
                <td>Giới tính:</td>
                <td>
                    <label><input type="radio" name="gioitinh" value="Nam" <?php if ($gioitinh === 'Nam') echo 'checked'; ?>> Nam</label>
                    &nbsp;
                    <label><input type="radio" name="gioitinh" value="Nữ" <?php if ($gioitinh === 'Nữ') echo 'checked'; ?>> Nữ</label>
                </td>
            </tr>

            <tr>
                <td>Địa chỉ:</td>
                <td>
                    <input type="text" name="diachi" size="30" 
                           value="<?php if(isset($_POST['diachi'])) echo htmlspecialchars($_POST['diachi']); ?>" required>
                    <span class="required">*</span>
                </td>
            </tr>

            <tr>
                <td>Email:</td>
                <td>
                    <input type="email" name="email" size="30" 
                           value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>" required>
                    <span class="required">*</span>
                </td>
            </tr>

            <tr>
                <td>Độ tuổi:</td>
                <td>
                    <select name="dotuoi">
                        <option value="Dưới 30 tuổi" <?php if ($dotuoi === 'Dưới 30 tuổi') echo 'selected'; ?>>Dưới 30 tuổi</option>
                        <option value="Từ 30 đến 50 tuổi" <?php if ($dotuoi === 'Từ 30 đến 50 tuổi') echo 'selected'; ?>>Từ 30 đến 50 tuổi</option>
                        <option value="Trên 50 tuổi" <?php if ($dotuoi === 'Trên 50 tuổi') echo 'selected'; ?>>Trên 50 tuổi</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Sở thích:</td>
                <td>
                    <label><input type="checkbox" name="sothich[]" value="Bóng đá" <?php if(in_array('Bóng đá', (array)$sothich)) echo 'checked'; ?>> Bóng đá</label>
                    <label><input type="checkbox" name="sothich[]" value="Game" <?php if(in_array('Game', (array)$sothich)) echo 'checked'; ?>> Game</label>
                    <label><input type="checkbox" name="sothich[]" value="Bơi lội" <?php if(in_array('Bơi lội', (array)$sothich)) echo 'checked'; ?>> Bơi lội</label>
                    <label><input type="checkbox" name="sothich[]" value="Shopping" <?php if(in_array('Shopping', (array)$sothich)) echo 'checked'; ?>> Shopping</label>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="gui" value="Gửi" class="btn">
                    <input type="reset" name="reset" value="reset" class="btn" onclick="window.location.href='sticky_form.php'">
                </td>
            </tr>
        </table>
    </form>

    <!-- Slide 40: Hiển thị kết quả -->
    <?php if ($is_submitted): ?>
        <div class="result-box">
            <h4>THÔNG TIN CÁ NHÂN CỦA BẠN:</h4>
            <p>Họ tên: <?php echo htmlspecialchars($hoten); ?></p>
            <p>Email: <?php echo htmlspecialchars($email); ?></p>
            <p>Giới tính: <?php echo htmlspecialchars($gioitinh); ?></p>
            <p>Độ tuổi: <?php echo htmlspecialchars($dotuoi); ?></p>
            <p>
                <?php 
                if (!empty($sothich) && is_array($sothich)) {
                    echo "Sở thích: " . htmlspecialchars(implode(', ', $sothich));
                } else {
                    echo "Bạn không có sở thích nào";
                }
                ?>
            </p>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
