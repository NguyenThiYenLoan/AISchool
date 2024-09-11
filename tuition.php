<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học phí</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="css/tuition.css">
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
            <div class="title">Thông tin học phí</div>
        </div>
    </header>

    <main>
        <center>
            <button class="btn">Chọn học kỳ<i class="fa-solid fa-angle-down"></i></button>
        </center>

        <div class="fee-container">
            <div class="fee-row fee-header">
                <div class="fee-item">Mức học phí</div>
                <div class="fee-item">Đã đóng</div>
                <div class="fee-item">Khấu trừ</div>
                <div class="fee-item">Công nợ</div>
            </div>

            <div class="fee-row">
                <div class="fee-item">Học phí học kì I
                    <br><span>1.000.000</span>
                </div>
                
                <div class="fee-item" style="color: var(--primary-color); font-weight: bold;">1.000.000</div>
                <div class="fee-item">0</div>
                <div class="fee-item">0</div>
            </div>

            <div class="fee-row">
                <div class="fee-item">Bảo hiểm y tế
                    <br><span>1.000.000</span>
                </div>
                <div class="fee-item" style="color: var(--primary-color); font-weight: bold;">1.000.000</div>
                <div class="fee-item">0</div>
                <div class="fee-item">0</div>
            </div>

            <div class="fee-row">
                <div class="fee-item">Bảo hiểm tai nạn
                    <br><span>3.000.000</span>
                </div>
                <div class="fee-item" style="color: var(--primary-color); font-weight: bold;">0</div>
                <div class="fee-item">0</div>
                <div class="fee-item">3.000.000</div>
            </div>
        </div>
    </main>

    <footer>
        <div class="debt-container">
            <span class="label">Tổng công nợ :</span>
            <span class="amount">3.000.000</span>
        </div>
    </footer>
</body>
<script src="./js/back.js"></script>
</html>