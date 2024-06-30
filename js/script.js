document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const mobileHeader = document.querySelector('.mobile-header');
    const sidebar = document.querySelector('.sidebar');

    hamburger.addEventListener('click', function() {
        sidebar.classList.toggle('open');
        if (sidebar.classList.contains('open')) {
            mobileHeader.style.display = 'flex';
        } else {
            mobileHeader.style.display = 'none';
        }
    });
});
