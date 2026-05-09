<?php
session_start();

// Tài khoản cố định
$valid_username = "admin";
$valid_password = "Admin@123";

// Kiểm tra gửi bằng POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy dữ liệu
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Kiểm tra rỗng
    if (empty($username) || empty($password)) {

        echo "
        <html>
        <head>
            <title>Lỗi</title>

            <style>
                body{
                    font-family: Arial;
                    text-align: center;
                    margin-top: 100px;
                }

                button{
                    padding: 10px 20px;
                    background: orange;
                    color: white;
                    border: none;
                    cursor: pointer;
                    margin-top: 20px;
                }
            </style>
        </head>

        <body>

            <h2>Đăng nhập thất bại!</h2>

            <p>Không được để trống tài khoản hoặc mật khẩu.</p>

            <a href='login.html'>
                <button>Thử lại</button>
            </a>

        </body>
        </html>
        ";

        exit();
    }

    // Kiểm tra tài khoản đúng
    if ($username == $valid_username && $password == $valid_password) {

        // Lưu session
        $_SESSION['username'] = $username;

        echo "
        <html>
        <head>
            <title>Thành công</title>

            <style>
                body{
                    font-family: Arial;
                    text-align: center;
                    margin-top: 100px;
                }

                button{
                    padding: 10px 20px;
                    background: green;
                    color: white;
                    border: none;
                    cursor: pointer;
                    margin-top: 20px;
                }
            </style>
        </head>

        <body>

            <h2>Đăng nhập thành công!</h2>

            <p>Xin chào: <b>$username</b></p>

            <a href='success.php'>
                <button>Vào trang chính</button>
            </a>

        </body>
        </html>
        ";

    } else {

        echo "
        <html>
        <head>
            <title>Đăng nhập thất bại</title>

            <style>
                body{
                    font-family: Arial;
                    text-align: center;
                    margin-top: 100px;
                }

                button{
                    padding: 10px 20px;
                    background-color: red;
                    color: white;
                    border: none;
                    cursor: pointer;
                    margin-top: 20px;
                }

                button:hover{
                    background-color: darkred;
                }
            </style>
        </head>

        <body>

            <h2>Đăng nhập thất bại!</h2>

            <p>Sai tên đăng nhập hoặc mật khẩu.</p>

            <a href='login.html'>
                <button>Thử lại</button>
            </a>

        </body>
        </html>
        ";
    }

} else {

    echo "Yêu cầu không hợp lệ!";
}
?>