<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="ketqua.css">
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
            <div class="title">Kết Quả Học Tập</div>
        </div>

        <div class="subheader">
            <div class="row">
                <span>Họ tên: Nguyễn A</span>
                <span>Lớp: 1B</span>
            </div>

            <div class="row">
                <span>Học kì II</span>
                <span>Năm học: 2024-2025</span>
            </div>
        </div>
    </header>

    <main>
        <div class="table-container">
            <table class="fixed-column">
                <thead>
                    <tr>
                        <th>Môn học</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tổng kết</td>
                    </tr>
                    <tr>
                        <td>Điểm 15'</td>
                    </tr>
                    <tr>
                        <td>Điểm 1 tiết</td>
                    </tr>
                    <tr>
                        <td>Điểm GK</td>
                    </tr>
                    <tr>
                        <td>Điểm CK</td>
                    </tr>
                </tbody>
            </table>

            <div class="scrollable-columns">
                <table>
                    <thead>
                        <tr>
                            <th>Toán</th>
                            <th>Tiếng Việt</th>
                            <th>Tiếng Anh</th>
                            <th>Lịch Sử</th>
                            <th>Địa Lý</th>
                            <th>Đạo Đức</th>
                            <th>Khoa học</th>
                            <th>TN&XH</th>
                            <th>Tin học</th>
                            <!-- Add more subjects as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                                <div>Xuất sắc</div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades" style="background-color: var(--peachy-color);">5</div>
                                <div class="grades">10</div>
                                <div class="grades">10</div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Modal Structure -->
            <div id="gradeModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Chi tiết bài kiểm tra</h2>
                    <div class="modal-body">
                        <div class="info-row">
                            <div class="info">
                                <p>Trường: IUH</p>
                                <p>Lớp: 1B</p>
                                <p>Tên: Nguyễn Thị Yến Loan</p>
                            </div>
                            <div class="info">
                                <p>Ngày: 14/08/2024</p>
                                <p>Môn: Toán</p>
                                <p>Thời gian: 15’</p>
                            </div>
                        </div>
                        <div class="grade-review">
                            <div class="grade">
                                <div class="grades">10</div><br>
                                <img id="image" src="../img/header1.jpg" alt="Image to Download" width="300px"
                                    style="width: 120px; height: 85px;">
                                <br><br>
                                <button id="downloadBtn">Tải ảnh</button>
                            </div>
                            <div class="review">
                                <p>Nhận xét của giáo viên</p>
                                <p>Very good</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="kq.js"></script>
<script src="../js/back.js"></script>
</html>