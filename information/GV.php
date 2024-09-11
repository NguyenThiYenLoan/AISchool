<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AISchool</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/infor.css">
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
            <div class="title">Thông Tin Liên Lạc</div>
        </div>

        <div class="tab-container">
            <div id="chatTab" class="tab active" onclick="openTab('chatTab')">Giáo viên</div>
            <div id="groupTab" class="tab" onclick="openTab('groupTab')">Phụ Huynh</div>
        </div>
    </header>

    <main>
        <!-- Giáo viên -->
        <div id="chatContent" class="tab-content active">
            <div class="card">
                <img src="../img/b.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lưu Tại DataBase</h3>
                    <p>Môn: Toán</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: VinHome</p>
                    <p>Ghi chú : GVCN</p>
                </div>
                <a href="../chat/message.php"><button class="chat-button">Chat</button></a>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lưu Tại DataBase</h3>
                    <p>Môn: Toán</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: VinHome</p>
                    <p>Ghi chú : GVCN</p>
                </div>
                <a href="../chat/message.php"><button class="chat-button">Chat</button></a>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lưu Tại DataBase</h3>
                    <p>Môn: Toán</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: VinHome</p>
                    <p>Ghi chú : GVCN</p>
                </div>
                <a href="../chat/message.php"><button class="chat-button">Chat</button></a>
            </div>
        </div>

        <!-- Phụ huynh -->
        <div id="groupContent" class="tab-content">
            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lưu Tại DataBase</h3>
                    <p>Số học sinh: 2</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: VinHome</p>
                </div>
                <div class="button-group">
                    <button class="chat-button">Chat</button>
                    <button class="detail-button" onclick="openModal()">Chi tiết</button>
                </div>
            </div>

            <div class="modal" id="detailModal">
                <div class="modal-content">
                    <span class="close-button" onclick="closeModal()">&times;</span>
                    <center><h4>Thông tin của các con đang theo học tại trường</h4></center>
                    <div class="student-info">
                        <img src="../img/avtteacher.png" alt="Student Image">
                        <div class="student-details">
                            <p>Họ tên: Dữ liệu lưu trên database</p>
                            <p>Lớp: 1A</p>
                            <p>Năm học: 2024-2025</p>
                            <p>GVCN: Lưu DB luôn</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                    </div>
                    <div class="student-info">
                        <img src="../img/avtteacher.png" alt="Student Image">
                        <div class="student-details">
                            <p>Họ tên: Dữ liệu lưu trên database</p>
                            <p>Lớp: 1A</p>
                            <p>Năm học: 2024-2025</p>
                            <p>GVCN: Lưu DB luôn</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lưu Tại DataBase</h3>
                    <p>Số học sinh: 2</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: VinHome</p>
                </div>
                <div class="button-group">
                    <button class="chat-button">Chat</button>
                    <button class="detail-button">Chi tiết</button>
                </div>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/150" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lưu Tại DataBase</h3>
                    <p>Số học sinh: 2</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: VinHome</p>
                </div>
                <div class="button-group">
                    <button class="chat-button">Chat</button>
                    <button class="detail-button">Chi tiết</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="pagination-container">
            <button class="prev-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </button>

            <input type="text" id="page-number" value="1" readonly>
            
            <button class="next-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                </svg>
            </button>
        </div>
    </footer>
</body>
<script src="js/tab.js"></script>
<script src="js/quantity.js"></script>
<script src="js/chitiet.js"></script>
<script src="../js/back.js"></script>
</html>