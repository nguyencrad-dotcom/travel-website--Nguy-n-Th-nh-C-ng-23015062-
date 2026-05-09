<?php

include "db.php";

// Câu lệnh SQL
$sql = "SELECT * FROM users";

// Thực thi truy vấn
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách Users</title>

    <style>
        table{
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td{
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th{
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Danh sách người dùng</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Họ tên</th>
        <th>Email</th>
        <th>Ngày tạo</th>
    </tr>

    <?php
    // Kiểm tra có dữ liệu không
    if (mysqli_num_rows($result) > 0) {

        // Lặp từng dòng dữ liệu
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>" . $row['full_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['created_at'] . "</td>";

            echo "</tr>";
        }

    } else {
        echo "<tr>";
        echo "<td colspan='6'>Không có dữ liệu</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>