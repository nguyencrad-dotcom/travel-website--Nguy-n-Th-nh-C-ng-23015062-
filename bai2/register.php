<!DOCTYPE html>
<html>
<head><title>Đăng ký</title></head>
<body>
    <h2>Trang Đăng Ký</h2>
    <form action="process_register.php" method="POST">
        Họ tên: <input type="text" name="full_name" required><br><br>
        Username: <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Mật khẩu: <input type="password" name="password" required><br><br>
        <button type="submit">Đăng ký ngay</button>
    </form>
</body>
</html>