<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài3</title>
</head>
<body>
   <?php
// Khai báo và gán giá trị
$tenTour = "Tour Phú Quốc nghỉ dưỡng";
$giaTour = 4500000;
$soNguoi = 4;

// Xử lý
if ($soNguoi <= 0) {
    echo "Số người không hợp lệ";
} else {
    $tongTien = $giaTour * $soNguoi;

    echo "Tên tour: " . $tenTour . "<br>";
    echo "Giá tour: " . number_format($giaTour, 0, ',', '.') . " VNĐ<br>";
    echo "Số người: " . $soNguoi . "<br>";
    echo "Tổng tiền: " . number_format($tongTien, 0, ',', '.') . " VNĐ<br>";
}
// Phân loại tour theo giá
if ($giaTour < 2000000) {
    $loaiTour = "Tour tiết kiệm";
} elseif ($giaTour <= 4000000) {
    $loaiTour = "Tour tiêu chuẩn";
} else {
    $loaiTour = "Tour cao cấp";
        echo "Loại tour: " . $loaiTour . "<br>";
}

?>
</body>
</html>