<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 1: Xuất số chẵn từ 1 đến N</title>
</head>
<body>
    <h2>Bài 1: Xuất các số chẵn từ 1 đến N</h2>

    <?php
    // Sinh số ngẫu nhiên N từ 1 đến 100
    $n = rand(1, 100);

    echo "Số ngẫu nhiên N = " . $n . "<br><br>";
    echo "Các số chẵn trong khoảng từ 1 đến $n là: <br>";

    // Tìm và in các số chẵn từ 1 đến N
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 == 0) {
            echo $i . " ";
        }
    }
    ?>
</body>
</html>
