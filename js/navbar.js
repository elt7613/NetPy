document.querySelector('.menu-toggle').addEventListener('click', function() {
    document.querySelector('.navbar-menu').classList.toggle('active');
    document.querySelector('.join-btn').classList.toggle('active');
});

// Close menu when clicking outside
document.addEventListener('click', function(event) {
    const navbar = document.querySelector('.navbar');
    const menu = document.querySelector('.navbar-menu');
    const menuButton = document.querySelector('.menu-toggle');
    const joinBtn = document.querySelector('.join-btn');
    
    if (!navbar.contains(event.target)) {
        menu.classList.remove('active');
        joinBtn.classList.remove('active');
    }
});

// Adjust menu on window resize
window.addEventListener('resize', function() {
    if (window.innerWidth > 968) {
        document.querySelector('.navbar-menu').classList.remove('active');
        document.querySelector('.join-btn').classList.remove('active');
    }
});