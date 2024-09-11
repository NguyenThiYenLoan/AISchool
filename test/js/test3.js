// JavaScript để hiển thị/ẩn hộp thoại
document.querySelectorAll('.menu-button').forEach(button => {
    button.addEventListener('click', function (event) {
        // Ngăn sự kiện tiếp tục
        event.stopPropagation();

        // Tìm menu-content liên kết với menu-button được nhấp
        const menu = this.nextElementSibling;

        // Đóng tất cả menu-content
        document.querySelectorAll('.menu-content').forEach(otherMenu => {
            if (otherMenu !== menu) {
                otherMenu.style.display = 'none';
            }
        });

        // Chuyển đổi hiển thị menu-content hiện tại
        menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    });
});

// Ẩn hộp thoại khi nhấp bên ngoài
window.onclick = function(event) {
    if (!event.target.matches('.menu-button')) {
        document.querySelectorAll('.menu-content').forEach(menu => {
            if (menu.style.display === 'block') {
                menu.style.display = 'none';
            }
        });
    }
};