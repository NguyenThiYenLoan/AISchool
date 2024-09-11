<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Schedule</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="style.css">
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
            <div class="title">Thời khóa biểu</div>
        </div>
    </header>

    <div class="month">      
        <ul>
            <li class="prev">&#10094;</li>
            <li class="next">&#10095;</li>
            <li style="text-align:center">
                Tháng <span class="month-name">8</span><br>
                <span class="year" style="font-size:18px">2024</span>
            </li>
        </ul>
    </div>

    <div class="schedule">
        <div class="day"></div>
        <div class="day">T2</div>
        <div class="day">T3</div>
        <div class="day" style="background-color: #c1c3c3;">T4</div>
        <div class="day">T5</div>
        <div class="day">T6</div>
        <div class="day">T7</div>
        <div class="day">CN</div>

        <div class="time">7:55<br>1<br>8:40</div>
        <div class="content">PO3<br>C1.07<br>Gh</div>
        <div class="content">mu1<br>E0.04<br>Pe</div>
        <div class="content">en2<br>C0.03<br>Qu</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time" style="background-color: #c1c3c3;">8:45<br>2<br>9:30</div>
        <div class="content">BI2<br>F0.05<br>Kp</div>
        <div class="content">CH1<br>F0.15<br>Gn</div>
        <div class="content">wn1<br>C1.06<br>To</div>
        <div class="content">ma5<br>C1.06<br>Mi</div>
        <div class="content">de4<br>C1.04<br>Ki</div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">9:50<br>3<br>10:35</div>
        <div class="content">wn1<br>C1.06<br>To</div>
        <div class="content">PO3<br>C1.07<br>Gh</div>
        <div class="content">CH1<br>F0.15<br>Gn</div>
        <div class="content">BI2<br>F0.05<br>Kp</div>
        <div class="content">ma5<br>C1.06<br>Mi</div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">10:35<br>4<br>11:20</div>
        <div class="content">wn1<br>C1.06<br>To</div>
        <div class="content">PO3<br>C1.07<br>Gh</div>
        <div class="content">CH1<br>F0.15<br>Gn</div>
        <div class="content">BI2<br>F0.05<br>Kp</div>
        <div class="content">ma5<br>C1.06<br>Mi</div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">11:40<br>5<br>12:25</div>
        <div class="content">en2<br>C0.03<br>Qu</div>
        <div class="content">BI2<br>F0.05<br>Kp</div>
        <div class="content1"></div>
        <div class="content">PO3<br>C1.05<br>Gh</div>
        <div class="content">CH1<br>F0.15<br>Gn</div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">12:25<br>6<br>13:10</div>
        <div class="content">en2<br>C0.03<br>Qu</div>
        <div class="content">BI2<br>F0.05<br>Kp</div>
        <div class="content1"></div>
        <div class="content">PO3<br>C1.05<br>Gh</div>
        <div class="content">CH1<br>F0.15<br>Gn</div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">13:10<br>7<br>13:45</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">13:45<br>8<br>14:35</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content">de4<br>C1.04<br>Ki</div>
        <div class="content">mu1<br>E0.04<br>Pe</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">14:35<br>9<br>15:20</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content">de4<br>C1.04<br>Ki</div>
        <div class="content">mu1<br>E0.04<br>Pe</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>

        <div class="time">15:30<br>10<br>16:25</div>
        <div class="content1"></div>
        <div class="content">Badm<br>T1.6<br>Ki</div>
        <div class="content1"></div>
        <div class="content">sf6<br>C0.19<br>Pe</div>
        <div class="content1"></div>
        <div class="content1"></div>
        <div class="content1"></div>
    </div>
</body>
<script src="month.js"></script>
<script src="../js/back.js"></script>
</html>