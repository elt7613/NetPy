document.addEventListener('DOMContentLoaded', () => {
    const teamSectionLeft = document.querySelector('.section-4 .team-section__left');
    const teamSectionRight = document.querySelector('.section-4 .team-section__right');
    const teamImageColumns = document.querySelectorAll('.section-4 .team-section__image-column');
    const teamImages = document.querySelectorAll('.section-4 .team-section__image');
    
    function setupReelAnimation() {
        // Animation configuration with responsive settings
        const animationConfig = {
            maxMovement: window.innerWidth <= 768 
                ? window.innerHeight / 5  // Less movement on mobile
                : teamSectionLeft.offsetHeight / 0.5, // More movement on larger screens
            speed: window.innerWidth <= 768 ? 1 : 2, // Adjusted speed for different screens
            gap: 20,
            bounceFactor: 1
        };

        // Reset previous transformations
        teamSectionRight.style.height = window.innerWidth > 768 
            ? `${teamSectionLeft.offsetHeight}px` 
            : 'auto';

        let totalYOffsetColumn1 = 0;
        let totalYOffsetColumn2 = 0;
        let directionColumn1 = 1;
        let directionColumn2 = -1;

        function animateReelImages() {
            // Ensure animation is active
            if (window.innerWidth <= 768) {
                // Mobile specific animation - gentler movement
                totalYOffsetColumn1 += directionColumn1 * animationConfig.speed;
                totalYOffsetColumn2 += directionColumn2 * animationConfig.speed;

                // Reverse directions with more frequent changes on mobile
                if (Math.abs(totalYOffsetColumn1) >= animationConfig.maxMovement) {
                    directionColumn1 *= -1;
                    totalYOffsetColumn1 += directionColumn1 * animationConfig.bounceFactor;
                }

                if (Math.abs(totalYOffsetColumn2) >= animationConfig.maxMovement) {
                    directionColumn2 *= -1;
                    totalYOffsetColumn2 += directionColumn2 * animationConfig.bounceFactor;
                }

                // Apply transforms
                teamImageColumns[0].style.transform = `translateY(${totalYOffsetColumn1}px)`;
                teamImageColumns[1].style.transform = `translateY(${totalYOffsetColumn2}px)`;
            } else {
                // Desktop animation - more pronounced movement
                totalYOffsetColumn1 += directionColumn1 * animationConfig.speed;
                totalYOffsetColumn2 += directionColumn2 * animationConfig.speed;

                if (Math.abs(totalYOffsetColumn1) >= animationConfig.maxMovement) {
                    directionColumn1 *= -1;
                    totalYOffsetColumn1 += directionColumn1 * animationConfig.bounceFactor;
                }

                if (Math.abs(totalYOffsetColumn2) >= animationConfig.maxMovement) {
                    directionColumn2 *= -1;
                    totalYOffsetColumn2 += directionColumn2 * animationConfig.bounceFactor;
                }

                teamImageColumns[0].style.transform = `translateY(${totalYOffsetColumn1}px)`;
                teamImageColumns[1].style.transform = `translateY(${totalYOffsetColumn2}px)`;
            }

            // Continue animation
            requestAnimationFrame(animateReelImages);
        }

        // Start animation
        animateReelImages();
    }

    // Initial setup
    setupReelAnimation();

    // Recalculate on window resize
    window.addEventListener('resize', () => {
        // Clear previous animations and restart
        teamImageColumns.forEach(column => {
            column.style.transform = 'translateY(0)';
        });
        setupReelAnimation();
    });
});