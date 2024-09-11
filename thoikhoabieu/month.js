document.addEventListener('DOMContentLoaded', function () {
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const monthName = document.querySelector('.month-name');
    const yearElement = document.querySelector('.year');

    let currentMonth = 8; // Bắt đầu từ tháng 8
    let currentYear = 2024;

    function updateMonthDisplay() {
        monthName.textContent = currentMonth;
        yearElement.textContent = currentYear;
    }

    function updateCalendar() {
        // Cập nhật nội dung lịch cho tháng và năm hiện tại
        // Đây là nơi bạn có thể thêm mã để cập nhật lịch nếu cần
    }

    prevButton.addEventListener('click', function () {
        if (currentMonth === 1) {
            currentMonth = 12; // Đặt lại tháng về 12 nếu đang ở tháng 1
            currentYear--; // Giảm năm
        } else {
            currentMonth--;
        }
        updateMonthDisplay();
        updateCalendar();
    });

    nextButton.addEventListener('click', function () {
        if (currentMonth === 12) {
            currentMonth = 1; // Đặt lại tháng về 1 nếu đang ở tháng 12
            currentYear++; // Tăng năm
        } else {
            currentMonth++;
        }
        updateMonthDisplay();
        updateCalendar();
    });

    updateMonthDisplay(); // Cập nhật hiển thị tháng ban đầu
    updateCalendar(); // Cập nhật lịch ban đầu
});

// Đổi màu
document.querySelectorAll('.time').forEach(function(timeDiv) {
    timeDiv.addEventListener('click', function() {
        // Đặt tất cả các dòng về màu ban đầu
        document.querySelectorAll('.content').forEach(function(contentDiv) {
            contentDiv.style.backgroundColor = contentDiv.dataset.originalColor;
        });

        // Tìm tất cả các phần tử .content trong cùng một hàng với thẻ .time đã được bấm
        let index = Array.from(timeDiv.parentNode.children).indexOf(timeDiv);
        let contentElements = Array.from(timeDiv.parentNode.children).filter(function(div, idx) {
            return (idx > index && idx < index + 8); // Lấy các phần tử thuộc cùng hàng
        });

        // Đổi màu các phần tử trong hàng
        contentElements.forEach(function(contentDiv) {
            contentDiv.style.backgroundColor = 'rgb(46 139 205)';
        });
    });
});

// Lưu màu gốc của mỗi ô .content
document.querySelectorAll('.content').forEach(function(contentDiv) {
    contentDiv.dataset.originalColor = contentDiv.style.backgroundColor;
});
