<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài 3: Kiểm tra số N</title>
</head>
<body>
    <h2>Bài 3: Kiểm tra số ngẫu nhiên N</h2>

    <?php
    // Hàm kiểm tra số nguyên tố
    function kiemTraNguyenTo($x) {
        if ($x < 2) {
            return false;
        }
        for ($i = 2; $i <= sqrt($x); $i++) {
            if ($x % $i == 0) {
                return false;
            }
        }
        return true;
    }

    // Hàm kiểm tra số chính phương
    function kiemTraChinhPhuong($x) {
        if ($x < 0) {
            return false;
        }
        $can = (int)sqrt($x);
        return ($can * $can == $x);
    }

    // 1. Nhận giá trị ngẫu nhiên N trong [-100; 100]
    $n = rand(-100, 100);
    echo "Số ngẫu nhiên N = " . $n . "<br><br>";

    // 2. Kiểm tra N có là số dương không
    if ($n > 0) {
        echo "<b>$n là số dương. Kết quả:</b><br><br>";

        // a. In ra các ước số của N
        echo "- Các ước số của $n là: ";
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                echo "$i ";
            }
        }
        echo "<br><br>";

        // b. Kiểm tra xem N có phải là số nguyên tố không
        echo "- Kiểm tra số nguyên tố: ";
        if (kiemTraNguyenTo($n)) {
            echo "$n là số nguyên tố.<br><br>";
        } else {
            echo "$n không phải là số nguyên tố.<br><br>";
        }

        // c. Tính tổng các số nguyên tố < N
        $tong = 0;
        echo "- Các số nguyên tố < $n là: ";
        for ($i = 2; $i < $n; $i++) {
            if (kiemTraNguyenTo($i)) {
                echo "$i ";
                $tong += $i;
            }
        }
        echo "<br>=> Tổng các số nguyên tố < $n là: " . $tong . "<br><br>";

        // d. Kiểm tra N có là số chính phương?
        echo "- Kiểm tra số chính phương: ";
        if (kiemTraChinhPhuong($n)) {
            echo "$n là số chính phương.<br>";
        } else {
            echo "$n không phải là số chính phương.<br>";
        }

    } else {
        echo "$n không phải là số dương.";
    }
    ?>
</body>
</html>
