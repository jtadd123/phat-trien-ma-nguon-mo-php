<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Diện tích hình chữ nhật</title>
    <style>
        body {
            font-family: Arial, Tahoma, sans-serif;
            background-color: #f7f7f7;
            padding: 30px;
        }

        table {
            background-color: #fff3cd;
            border: 1px solid #ffeeba;
            padding: 10px;
            border-radius: 5px;
        }

        td {
            padding: 6px 10px;
        }

        h3 {
            color: #856404;
            margin: 6px 0;
            text-align: center;
        }

        input[type="text"] {
            padding: 4px 6px;
            border: 1px solid #ced4da;
            border-radius: 3px;
        }

        .result {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            font-weight: bold;
        }

        .btn {
            padding: 5px 15px;
            cursor: pointer;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
$chieu_dai = "";
$chieu_rong = "";
$dien_tich = "";
$chu_vi = "";
$error = "";

if (isset($_POST['tinh'])) {
    $chieu_dai = trim($_POST['chieu_dai'] ?? '');
    $chieu_rong = trim($_POST['chieu_rong'] ?? '');

    // Kiểm tra dữ liệu đầu vào
    if ($chieu_dai === "" || $chieu_rong === "") {
        $error = "Vui lòng nhập đầy đủ chiều dài và chiều rộng!";
    } elseif (!is_numeric($chieu_dai) || !is_numeric($chieu_rong)) {
        $error = "Chiều dài và chiều rộng phải là số!";
    } elseif ($chieu_dai <= 0 || $chieu_rong <= 0) {
        $error = "Chiều dài và chiều rộng phải lớn hơn 0!";
    } else {
        $d = (float)$chieu_dai;
        $r = (float)$chieu_rong;
        $dien_tich = $d * $r;
        $chu_vi = 2 * ($d + $r);
    }
}
?>

<?php if (!empty($error)): ?>
    <div class="error"><?php echo htmlspecialchars($error); ?></div>
<?php endif; ?>

<form name="form_hcn" action="dien_tich_hcn.php" method="POST">
    <table align="center">
        <tr bgcolor="#ffe69c">
            <td colspan="2">
                <h3>DIỆN TÍCH HÌNH CHỮ NHẬT</h3>
            </td>
        </tr>
        <tr>
            <td>Chiều dài:</td>
            <td>
                <input type="text" name="chieu_dai" value="<?php echo htmlspecialchars($chieu_dai); ?>" required>
            </td>
        </tr>
        <tr>
            <td>Chiều rộng:</td>
            <td>
                <input type="text" name="chieu_rong" value="<?php echo htmlspecialchars($chieu_rong); ?>" required>
            </td>
        </tr>
        <tr>
            <td>Diện tích:</td>
            <td>
                <input type="text" name="dien_tich" value="<?php echo htmlspecialchars($dien_tich); ?>" readonly class="result">
            </td>
        </tr>
        <tr>
            <td>Chu vi:</td>
            <td>
                <input type="text" name="chu_vi" value="<?php echo htmlspecialchars($chu_vi); ?>" readonly class="result">
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="tinh" value="Tính" class="btn">
                <input type="button" value="Nhập lại" class="btn" onclick="window.location.href='dien_tich_hcn.php'">
            </td>
        </tr>
    </table>
</form>

</body>
</html>
