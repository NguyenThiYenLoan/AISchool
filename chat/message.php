<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/mess.css">
</head>
<body>
    <header>
        <div class="container">
            <button onclick="goBack()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                    </svg>
            </button>
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm">
            </div>
        </div>
        
        <div class="tab-container">
            <div id="chatTab" class="tab active">Đoạn chat</div>
            <div id="groupTab" class="tab">Nhóm</div>
        </div>
    </header>

    <main>
        <!-- Đoạn chat -->
        <div id="chatContent" class="content">
            <ul class="chat-list">
                <li class="chat-item" data-chat-id="A">
                    <img src="../img/a.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh A</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="B">
                    <img src="../img/images.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh B</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="C">
                    <img src="../img/a.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh C</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="D">
                    <img src="../img/images.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh D</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh E</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh F</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh C</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Phụ huynh C</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
            </ul>
        </div>

        <!-- Nhóm -->
        <div id="groupContent" class="content" style="display: none;">
            <ul class="chat-list">
                <li class="chat-item" data-chat-id="E">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 1A</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    
                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>
                <li class="chat-item" data-chat-id="F">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 2B</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="G">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 3A</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="H">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 4A</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 1B</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 2B</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 3B</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 4B</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
            </ul>
        </div>
    </main>

    <footer>
        <div class="container">
            <center><a href="#">Xem tất cả</a></center>
        </div>
    </footer>
</body>
<script src="js/tab.js"></script>
<script src="js/chat.js"></script>
<script src="js/nhom.js"></script>
<script src="../js/back.js"></script>
</html>