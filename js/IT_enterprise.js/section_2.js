document.addEventListener("DOMContentLoaded", function () {
    const serviceCards = document.querySelectorAll(".section-2 .service-card");
    const loadMoreButton = document.getElementById("loadMore");

    let visibleCount = 3; // Number of cards visible initially
    const increment = 3; // Number of cards to show each time

    // Hide all cards beyond the initial visible count
    serviceCards.forEach((card, index) => {
        if (index >= visibleCount) {
            card.style.display = "none";
        }
    });

    // Add event listener to the Load More button
    loadMoreButton.addEventListener("click", () => {
        let newVisibleCount = visibleCount + increment;

        // Show the next set of cards
        serviceCards.forEach((card, index) => {
            if (index < newVisibleCount) {
                card.style.display = "block";
            }
        });

        // Update the visible count
        visibleCount = newVisibleCount;

        // If all cards are visible, hide the Load More button
        if (visibleCount >= serviceCards.length) {
            loadMoreButton.style.display = "none";
        }
    });
});
