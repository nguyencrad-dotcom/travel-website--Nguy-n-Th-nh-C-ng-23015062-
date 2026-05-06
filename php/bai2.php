<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thông tin tour</title>
</head>
<body>
    <h1>thông tin tour</h1>
    <?php
    $tenTuor="Tour Đà Lạt,3 ngày 2 đêm";
    $diemDen="Đà lạt";
    $soNgay="3";
    $soDem="2";
    $giaTuor="3.000.000"
    ?>
    <h2><?php echo $tenTuor;?></h2>
    <p>Điểm đến <?php echo $diemDen; ?></p>
    <p>Số ngày <?php echo $soNgay; ?></p>
    <p>Số đêm <?php echo $soDem; ?></p>
    <p>Giá Tour <?php echo $giaTuor; ?></p>
</body>
</html>