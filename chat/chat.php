<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/chat.css">
</head>
<body>
    <header>
        <div class="container">
            <span class="back-arrow" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <img src="../img/a.jpg" alt="Avatar" class="avatar">
            <div class="username">Phụ Huynh A</div>
            <div class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
    </header>

    <main>
        <div class="chat-container" id="chat-container">
            <div class="chat-bubble bot">
                <img src="../img/a.jpg" alt="Bot">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble user" style="justify-content: right;">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble bot">
                <img src="../img/a.jpg" alt="Bot">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble user" style="justify-content: right;">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble bot">
                <img src="../img/a.jpg" alt="Bot">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble user" style="justify-content: right;">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble bot">
                <img src="../img/a.jpg" alt="Bot">
                <div class="message">Nội dung chat...</div>
            </div>

            <div class="chat-bubble user" style="justify-content: right;">
                <div class="message">Nội dung chat...</div>
            </div>
        </div>
    </main>

    <footer>
        <div class="footer-bar">
            <div class="icon-container">

                <!-- Dấu cộng thêm nội dung -->
                <div class="dialog-overlay" id="dialogOverlay">
                    <div class="dialog-box">
                        <button class="close-btn" id="closeDialog">&times;</button>
                        <div class="dialog-content">
                            <div class="dialog-item">
                                <i class="fa-solid fa-file-circle-plus"></i>
                                <span>File</span>
                            </div>
                            <div class="dialog-item">
                                <i class="fa-regular fa-file-lines"></i>
                                <span>Tài liệu</span>
                            </div>
                            <div class="dialog-item">
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Vị trí</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="icon-btn"><i class="fa-solid fa-circle-plus"></i></button>

                <!-- Hidden video element for capturing camera -->
                <button class="icon-btn" id="camera-btn"><i class="fa-solid fa-camera"></i></button>
                
                <!-- Tải hình ảnh -->
                <input type="file" id="image-upload" accept="image/*" style="display:none;">
                <button class="icon-btn" id="gallery-btn"><i class="fa-regular fa-image"></i></button>

                <button class="icon-btn" id="microphone-btn"><i class="fa-solid fa-microphone"></i></button>
            </div>

            <input type="text" id="message-input" class="message-input" placeholder="Nhắn tin">
            <div class="icon-container">
                <button class="icon-btn" id="send-btn"><i class="fa-regular fa-paper-plane"></i></button>
            </div>
        </div>
    </footer>
</body>
<script src="../js/back.js"></script>
<script src="./js/image.js"></script>
<script src="./js/camera.js"></script>
<script src="./js/mic.js"></script>
<script src="./js/send.js"></script>
</html>