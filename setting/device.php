<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thiết bị</title>
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
    <link rel="stylesheet" href="css/device.css">
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
            <div class="title">Quản lý thiết bị</div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="section">
                <div class="section-title">Thiết bị đăng nhập</div>
                <ul class="device-list">
                    <li class="device-item">
                        <div class="device-info">
                            <span class="device-icon">📱</span>
                            <div>
                                <div class="device-name">Iphone 7 Plus</div>
                                <div class="device-status">Đăng nhập bằng mật khẩu</div>
                            </div>
                        </div>
                        <span class="menu-button">⋮</span>
                    </li>
                    <li class="device-item">
                        <div class="device-info">
                            <span class="device-icon">💻</span>
                            <div>
                                <div class="device-name">PC-Windows</div>
                                <div class="device-status">Đăng nhập bằng mật khẩu</div>
                            </div>
                        </div>
                        <span class="menu-button">⋮</span>
                    </li>
                </ul>
            </div>
            <div class="section">
                <div class="section-title">Thiết bị đã đăng xuất gần đây</div>
                <ul class="device-list">
                    <li class="device-item">
                        <div class="device-info">
                            <span class="device-icon">📱</span>
                            <div>
                                <div class="device-name">Iphone 8 Plus</div>
                                <div class="device-status">Đăng nhập bằng mật khẩu</div>
                            </div>
                        </div>
                        <span class="menu-button">⋮</span>
                    </li>
                    <li class="device-item">
                        <div class="device-info">
                            <span class="device-icon">🌐</span>
                            <div>
                                <div class="device-name">Edge-Windows</div>
                                <div class="device-status">Đăng nhập bằng mật khẩu</div>
                            </div>
                        </div>
                        <span class="menu-button">⋮</span>
                    </li>
                    <li class="device-item">
                        <div class="device-info">
                            <span class="device-icon">🌐</span>
                            <div>
                                <div class="device-name">Chrome-Windows</div>
                                <div class="device-status">Đăng nhập bằng mật khẩu</div>
                            </div>
                        </div>
                        <span class="menu-button">⋮</span>
                    </li>
                </ul>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
</html>