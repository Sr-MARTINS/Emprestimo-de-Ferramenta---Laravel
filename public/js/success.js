document.addEventListener('DOMContentLoaded', function () {
    setTimeout(function () {
        const msg = document.getElementById('success-msg');
        if (msg) {
            msg.style.transition = 'opacity 1s ease';
            msg.style.opacity = '0';
            setTimeout(function () {
                msg.style.display = 'none';
            }, 1000);
        }
    }, 5000);
});