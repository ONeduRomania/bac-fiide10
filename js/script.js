document.addEventListener('DOMContentLoaded', function() {
    const hamburger = document.querySelector('.hamburger');
    const sidebar = document.querySelector('.sidebar');

    hamburger.addEventListener('click', function() {
        sidebar.classList.toggle('open');
    });
});

function toggleInfo() {
    var infoSubtitle = event.target.closest('.info-subtitle');
    var infoContent = infoSubtitle.nextElementSibling;

    if (infoContent.classList.contains('open')) {
        infoContent.classList.remove('open');
    } else {
        closeAllInfo(); // Închide toate detaliile existente
        infoContent.classList.add('open');
    }
}

function closeAllInfo() {
    var infoDetails = document.querySelectorAll('.info-details');
    infoDetails.forEach(function(detail) {
        detail.classList.remove('open');
    });
}

function openSidebar() {
    var sidebar = document.querySelector('.sidebar');
    sidebar.classList.add('open');
}

function closeSidebar() {
    var sidebar = document.querySelector('.sidebar');
    sidebar.classList.remove('open');
}