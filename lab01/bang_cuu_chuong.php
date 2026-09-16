<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng cửu chương</title>
</head>
<body>
    <h2 align="center">BẢNG CỬU CHƯƠNG TỪ 1 ĐẾN 10</h2>

    <table border="1" align="center" cellpadding="8" cellspacing="0">
        <tr>
            <?php
            // Tiêu đề từng cột: Chương 1 -> Chương 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<th>Chương $i</th>";
            }
            ?>
        </tr>
        <?php
            // Vòng lặp các hàng từ 1 đến 10
            for ($i = 1; $i <= 10; $i++) {
                echo "<tr>";
                // Vòng lặp các cột tương ứng với Chương $j
                for ($j = 1; $j <= 10; $j++) {
                    echo "<td>$j x $i = " . ($j * $i) . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>