<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang điểm danh lớp</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/trangdiemdanhlop.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="main">
        <!-- HEADER -->
        <div class="header">
            <div class="content-header">
                <div class="icon-header" onclick="goBack()">
                    <i class="ti-angle-left"></i>
                </div>
                <div class="title-header">Điểm danh lớp 1A</div>
            </div>
        </div>


        <!-- THÔNG TIN TỔNG QUAN CỦA LỚP -->
        <div class="infoclass-container">
            <div class="info-class">

                <div class="infoclass-top">
                    <div class="teacher-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-teacher">
                    </div>
                    <div class="info-deatail">
                        <h6><strong>Giáo viên: Nguyễn Thị Mai</strong></h6>
                        <p>Ngày: 19/08/2024</p>
                        <p>Thời gian: 10:30</p>
                    </div>
                </div>

                <div class="infoclass-bottom">
                    <button type="button" class="btn-infoclass"> <a href="#" class="siso"
                            onclick="toggleClass('sisolop')">Sỉ số: 40</a> </button>
                    <button type="button" class="btn-infoclass"><a href="#" class="hiendien"
                            onclick="toggleClass('hiendien')">Hiện diện: 38</a></button>
                    <button type="button" class="btn-infoclass"><a href="#" class="tre"
                            onclick="toggleClass('dihoctre')">Trễ: 02</a></button>
                    <button type="button" class="btn-infoclass"><a href="#" class="vang"
                            onclick="toggleClass('vanghoc')">Vắng: 02</a>
                    </button>
                </div>

            </div>
        </div>

        <!-- JS -->
        <script>
            function toggleClass(classId) {
                document.querySelectorAll('.collapse').forEach(function (element) {
                    if (element.id !== classId) {
                        element.classList.remove('show');
                    }
                });

                var element = document.getElementById(classId);
                if (element.classList.contains('show')) {
                    element.classList.remove('show');
                } else {
                    element.classList.add('show');
                }
            }
        </script>


        <!-- THÔNG TIN HIỆN DIỆN - TRỄ - VẮNG -->

        <!-- SỈ SỐ -->

        <div class="collapse show" id="sisolop">
            <div class="infostudy-container">

                <div class="infostudy-detail sisolop">
                    <div class="infostudy-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-student">
                    </div>
                    <div class="infostudy-content">
                        <h6><strong><a href="./thongtinhocsinhfix.php" style="text-decoration: none; color: black;">Trần
                                    Thành Đạt</a></strong></h6>
                        <p>Thời gian đến lớp: 10:25</p>
                    </div>
                    <div class="infostudy-button">
                        <button type="button" class="btn-suckhoe">Trạng thái</button>
                        <button type="button" class="btn-chat">
                            <i class="ti-pencil-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="infostudy-detail sisolop">
                    <div class="infostudy-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-student">
                    </div>
                    <div class="infostudy-content">
                        <h6><strong><a href="./thongtinhocsinhfix.php"
                                    style="text-decoration: none; color: black;">Nguyễn Thị Yến Loan</a></strong></h6>
                        <p>Thời gian đến lớp: 07:15</p>
                    </div>
                    <div class="infostudy-button">
                        <button type="button" class="btn-suckhoe" data-bs-toggle="modal" data-bs-target="#suckhoe1">Trạng thái</button>
                        <button type="button" class="btn-chat">
                            <i class="ti-pencil-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <div class="collapse " id="hiendien">
            <div class="infostudy-container">
                <!-- HIỆN DIỆN -->
                <div class="infostudy-detail comat">
                    <div class="infostudy-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-student">
                    </div>
                    <div class="infostudy-content">
                        <h6><strong><a href="./thongtinhocsinhfix.php" style="text-decoration: none; color: black;">Từ
                                    Văn Tú</a></strong></h6>
                        <p>Thời gian đến lớp: 10:00</p>
                    </div>
                    <div class="infostudy-button">
                        <button type="button" class="btn-suckhoe" data-bs-toggle="modal" data-bs-target="#suckhoe1">Trạng thái</button>
                        <button type="button" class="btn-chat">
                            <i class="ti-pencil-alt"></i>
                        </button>
                    </div>
                </div>

                <div class="infostudy-detail">
                    <div class="infostudy-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-student">
                    </div>
                    <div class="infostudy-content">
                        <h6><strong><a href="./thongtinhocsinhfix.php" style="text-decoration: none; color: black;">Từ
                                    Văn Tú</a></strong></h6>
                        <p>Thời gian đến lớp: 10:25</p>
                    </div>
                    <div class="infostudy-button">
                        <button type="button" class="btn-suckhoe">Trạng thái</button>
                        <button type="button" class="btn-chat">
                            <i class="ti-pencil-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- TRỄ -->
        <div class="collapse" id="dihoctre">
            <div class="infostudy-container">
                <div class="infostudy-detail dihoctre">
                    <div class="infostudy-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-student">
                    </div>
                    <div class="infostudy-content">
                        <h6><strong><a href="./thongtinhocsinhfix.php" style="text-decoration: none; color: black;">Từ
                                    Văn Tú</a></strong></h6>
                        <p>Thời gian đến lớp: 07:15</p>
                    </div>
                    <div class="infostudy-button">
                        <button type="button" class="btn-suckhoe" data-bs-toggle="modal" data-bs-target="#suckhoe1">Trạng thái</button>
                        <button type="button" class="btn-chat">
                            <i class="ti-pencil-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- VẮNG -->
        <div class="collapse" id="vanghoc">
            <div class="infostudy-container">
                <div class="infostudy-detail vanghoc">
                    <div class="infostudy-photo">
                        <img src="../IMG/avtteacher.png" alt="" class="img-student">
                    </div>
                    <div class="infostudy-content">
                        <h6><strong><a href="./thongtinhocsinhfix.php"
                                    style="text-decoration: none; color: black;">Phương Lý Bảo Hân</a></strong></h6>
                        <p>Thời gian đến lớp: Không</p>
                    </div>
                    <div class="infostudy-button">
                        <button type="button" class="btn-suckhoe" data-bs-toggle="modal" data-bs-target="#suckhoe1">Trạng thái</button>
                        <button type="button" class="btn-chat">
                            <i class="ti-pencil-alt"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL BÁO CÁO TÌNH HÌNH Tình KHỎE -->
        <div class="modal fade" id="suckhoe1" tabindex="-1" aria-labelledby="suckhoeLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="title">Báo cáo tình hình học sinh</div>
                    </div>
                    <div class="modal-body">
                        <!-- XÁC NHẬN ĐÃ ĐẾN LỚP -->
                        <div class="check-denlop">
                            <label for="checkClass" class="form-label">Học sinh đã đến lớp:</label>
                            <select id="checkClass" class="form-select">
                                <option value="yes">Đã đến lớp</option>
                                <option value="no">Chưa đến lớp</option>
                            </select>
                        </div>

                        <!-- Phần báo cáo tình hình Tình khỏe -->
                        <div class="check-suckhoe">
                            <div class="form-suckhoe-group">
                                <div class="from-check-suckhoe">
                                    <label class="form-label">Tình trạng sức khỏe:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trangthai" id="normal"
                                            value="normal" checked>
                                        <label class="form-check-label" for="normal">
                                            Bình thường
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="trangthai" id="canquantam"
                                            value="canquantam">
                                        <label class="form-check-label" for="canquantam">
                                            Cần quan tâm
                                        </label>
                                    </div>
                                </div>

                                <div class="form-photo"></div>
                            </div>


                            <textarea class="form-control" id="canquantam-detail" rows="3"
                                placeholder="Nhập chi tiết tình trạng Tình khỏe"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-send" id="send">Gửi</button>
                        <button type="button" class="btn-camera">
                            <i class="ti-camera"></i>
                        </button>
                        <button type="button" class="btn-exit" data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
<script src="../js/back.js"></script>
<script src="./js/diemdanhlop.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>

</html>