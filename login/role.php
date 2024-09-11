<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn vai trò</title>
    <link rel="stylesheet" href="./css/role.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
</head>

<body>
    <header>
        <div class="header">
            <i class="ti-angle-left" onclick="goBack()"></i>
        </div>
    </header>

    <main>
        <div class="main__photo">
            <img src="../img/intro4.jpg" alt="">
        </div>

        <div class="main__title">
            <p>Chào mừng đến SchoolAI App</p>
        </div>

        <div class="main__title_small">
            <p>Bạn là ai?</p>
        </div>

        <div class="main__button">
            <a href="loginGV.php">
                <button type="button" class="btn btn__teacher">Giáo viên</button>
            </a>
            <a href="loginPH.php">
                <button type="button" class="btn btn__teacher">Phụ huynh</button>
            </a>
            <a href="loginHS.php">
                <button type="button" class="btn btn__teacher">Học sinh</button>
            </a>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>

</html>