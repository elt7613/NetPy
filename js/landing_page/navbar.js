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




// Services Toggling
document.querySelectorAll('.dropdown-trigger').forEach(trigger => {
    trigger.addEventListener('click', (e) => {
        e.preventDefault(); // Prevent default link behavior if any
        const dropdown = trigger.closest('.dropdown');
        dropdown.classList.toggle('active');

        // Close other dropdowns if necessary
        document.querySelectorAll('.dropdown').forEach(d => {
            if (d !== dropdown) d.classList.remove('active');
        });
    });
});




///=========== Drop Down ===============
document.addEventListener('DOMContentLoaded', () => {
    const topics = document.querySelectorAll('.topic');
    const contents = document.querySelectorAll('.content');
    
    // Set first topic and content as active by default
    if (topics.length > 0 && contents.length > 0) {
        topics[0].classList.add('active');
        contents[0].classList.add('active');
    }

    // Handle topic hover/click
    topics.forEach((topic) => {
        topic.addEventListener('mouseenter', () => {
            // Remove active class from all topics
            topics.forEach((t) => t.classList.remove('active'));
            // Add active class to the current topic
            topic.classList.add('active');

            // Display the corresponding content
            const targetContentId = topic.getAttribute('data-content');
            contents.forEach((content) => {
                content.classList.toggle('active', content.id === targetContentId);
            });
        });

        // Optional: Handle click events for mobile
        topic.addEventListener('click', (e) => {
            const nestedContent = topic.querySelector('.nested-dropdown-content');
            if (nestedContent) {
                e.stopPropagation();
                // Toggle nested dropdown visibility
                const isVisible = nestedContent.style.display === 'block';
                document.querySelectorAll('.nested-dropdown-content').forEach(content => {
                    content.style.display = 'none';
                });
                nestedContent.style.display = isVisible ? 'none' : 'block';
            }
        });
    });
});