document.addEventListener('DOMContentLoaded', function () {
    const today = new Date().toISOString().split('T')[0];
    const events = document.querySelectorAll('.calendar-event');

    events.forEach(event => {
        const eventDate = event.getAttribute('data-date');
        if (eventDate === today) {
            event.style.backgroundColor = '#f0f8ff';
        }
    });
});
