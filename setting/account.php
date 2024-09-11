<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt tài khoản</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/account.css">
</head>
<body>
    <header>
        <div class="header">
            <span class="back-arrow" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <div class="title">Cài đặt tài khoản</div>
        </div>
    </header>

    <main>
        <div class="account-info">Tài khoản : Học sinh</div>
        <div class="profile-container">
            <img src="../img/at.jpg" alt="Nguyễn Thị Yến Loan">
            <div class="profile-details">
                <span>Thông tin cá nhân</span>
                <h3>Nguyễn Thị Yến Loan</h3>
            </div>
        </div>

        <div class="info-card">
            <div class="info-row">
                <i class="icon"><i class="fa-regular fa-user"></i></i>
                <span class="label">Tên</span>
                <span class="value">Nguyễn Thị Yến Loan</span>
            </div>

            <div class="info-row">
                <i class="icon"><i class="fa-regular fa-calendar-days"></i></i>
                <span class="label">Ngày sinh</span>
                <span class="value">05/06/2002</span>
            </div>

            <div class="info-row">
                <i class="icon"><i class="fa-solid fa-genderless"></i></i>
                <span class="label">Giới tính</span>
                <span class="value">Nữ</span>
            </div>
            
            <div class="info-row">
                <i class="icon"><i class="fa-solid fa-circle-info"></i></i>
                <span class="label">MSHS</span>
                <span class="value">HS34553</span>
            </div>
        </div>
    </main>

    <footer>
        <div class="button">
            <a href="">
                <span class="icon"><i class="fa-solid fa-pen"></i></span>
                <button type="button" class="login">Chỉnh sửa</button>
            </a>
        </div>
    </footer>
</body>
<script src="../js/back.js"></script>
</html>