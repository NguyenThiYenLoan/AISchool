<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch Họp Phụ Huynh</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            <div class="title">Lịch Họp Phụ Huynh</div>
            <i class="fas fa-calendar-alt icon-calendar calendar-button"></i>
        </div>
        
        <div class="calendar-dialog" id="calendarDialog">
            <span class="close" id="closeCalendar">&times;</span>
            <div class="calendar-header">
                <span id="prevMonth">&lt;</span>
                <span class="month-year" id="monthYear"></span>
                <span id="nextMonth">&gt;</span>
            </div>
            <table class="calendar" id="calendarTable">
                <thead>
                    <tr>
                        <th>T2</th>
                        <th>T3</th>
                        <th>T4</th>
                        <th>T5</th>
                        <th>T6</th>
                        <th>T7</th>
                        <th>CN</th>
                    </tr>
                </thead>
                <tbody id="calendarBody">
                    <!-- Calendar will be dynamically generated here -->
                </tbody>
            </table>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="card">
                <div class="card-header">Thứ 5 - 15/08/2024</div>
                <div class="card-body">
                    <p><strong>Họp phụ huynh lớp 1A</strong></p>
                    <p><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                    <p><strong>Người chủ trì:</strong> Loan cục súc</p>
                    <p><strong>Thời gian:</strong> 10:30</p>
                    <p><strong>Địa điểm:</strong> Phòng học lớp 1A</p>
                    <p><strong>Ghi chú:</strong> ....</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Thứ 5 - 15/08/2024</div>
                <div class="card-body">
                    <p><strong>Họp phụ huynh lớp 1A</strong></p>
                    <p><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                    <p><strong>Người chủ trì:</strong> Loan cục súc</p>
                    <p><strong>Thời gian:</strong> 10:30</p>
                    <p><strong>Địa điểm:</strong> Phòng học lớp 1A</p>
                    <p><strong>Ghi chú:</strong> ....</p>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Thứ 5 - 15/08/2024</div>
                <div class="card-body">
                    <p><strong>Họp phụ huynh lớp 1A</strong></p>
                    <p><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                    <p><strong>Người chủ trì:</strong> Loan cục súc</p>
                    <p><strong>Thời gian:</strong> 10:30</p>
                    <p><strong>Địa điểm:</strong> Phòng học lớp 1A</p>
                    <p><strong>Ghi chú:</strong> ....</p>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/lich.js"></script>
<script src="../js/back.js"></script>
</html>