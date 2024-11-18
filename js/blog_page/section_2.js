const blogData = [
    {
        id: 1,
        title: "Feature One: Intuitive User Interface",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image1.png",
        learn_more: "",
        categories: ["drone", "coding"]
    },
    {
        id: 2,
        title: "Cloud Computing Fundamentals",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image2.png",
        learn_more: "",
        categories: ["cloud", "software"]
    },
    {
        id: 3,
        title: "AI in Cybersecurity",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image3.png",
        learn_more: "",
        categories: ["ai", "cyber", "security"]
    },
    {
        id: 4,
        title: "IoT Solutions for Business",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image2.png",
        learn_more: "",
        categories: ["iot", "automation"]
    },
    {
        id: 5,
        title: "Data Analytics in Cloud",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image1.png",
        learn_more: "",
        categories: ["data", "cloud"]
    },
    {
        id: 6,
        title: "Modern Software Development",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image3.png",
        learn_more: "",
        categories: ["software", "coding"]
    },
    {
        id: 7,
        title: "AI-Powered Automation",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image1.png",
        learn_more: "",
        categories: ["ai", "automation"]
    },
    {
        id: 8,
        title: "Cyber Security Best Practices",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image2.png",
        learn_more: "",
        categories: ["cyber", "security"]
    },
    {
        id: 9,
        title: "Data Analytics Fundamentals",
        date: "12/10/2024",
        image: "../../images/blog_page/section-2/blog_image3.png",
        learn_more: "",
        categories: ["data"]
    }
];

// Global variables
let currentCategory = 'all';
let searchTerm = '';
let visibleCards = 3;
const cardsPerLoad = 3;

// Create HTML for a blog card
function createBlogCard(blog) {
    return `
        <div class="blog-card" data-categories="${blog.categories.join(' ')}">
            <img src="${blog.image}" alt="${blog.title}" class="blog-image">
            <div class="blog-content">
                <h3 class="blog-title">${blog.title}</h3>
                <p class="blog-date">${blog.date}</p>
                <a href="${blog.learn_more}" class="learn-more">Learn more</a>
            </div>
        </div>
    `;
}

// Update header title and filter display
function updateHeaderDisplay() {
    const filterType = document.querySelector('.filter-type');
    let displayText = 'All Posts';

    if (searchTerm) {
        displayText = `${searchTerm}`;
    } else if (currentCategory !== 'all') {
        displayText = document.querySelector(`.tag[data-category="${currentCategory}"]`).textContent;
    }

    filterType.textContent = displayText;
}

// Filter and display blogs
function filterAndDisplayBlogs() {
    const blogGrid = document.getElementById('blogGrid');
    const loadMoreButton = document.getElementById('loadMore');
    let filteredBlogs = blogData;

    // Apply category filter
    if (currentCategory !== 'all') {
        filteredBlogs = blogData.filter(blog => 
            blog.categories.includes(currentCategory)
        );
    }

    // Apply search filter
    if (searchTerm) {
        filteredBlogs = filteredBlogs.filter(blog =>
            blog.title.toLowerCase().includes(searchTerm.toLowerCase()) ||
            blog.categories.some(cat => cat.toLowerCase().includes(searchTerm.toLowerCase()))
        );
    }

    // Update header display
    updateHeaderDisplay();

    // Clear current blogs
    blogGrid.innerHTML = '';

    // Show message if no results
    if (filteredBlogs.length === 0) {
        blogGrid.innerHTML = '<div class="no-results">No blogs found matching your criteria!</div>';
        loadMoreButton.classList.add('hidden');
        return;
    }

    // Add filtered blogs
    filteredBlogs.forEach((blog, index) => {
        const blogHTML = createBlogCard(blog);
        blogGrid.insertAdjacentHTML('beforeend', blogHTML);
    });

    // Show initial set of cards
    const allCards = document.querySelectorAll('.blog-card');
    allCards.forEach((card, index) => {
        if (index < visibleCards) {
            card.classList.add('visible');
        }
    });

    // Show/hide load more button
    loadMoreButton.classList.toggle('hidden', allCards.length <= visibleCards);
}

// Load more blogs
function loadMore() {
    const hiddenCards = document.querySelectorAll('.blog-card:not(.visible)');
    const cardsToShow = Math.min(cardsPerLoad, hiddenCards.length);

    for (let i = 0; i < cardsToShow; i++) {
        hiddenCards[i].classList.add('visible');
    }

    // Hide load more button if no more cards to show
    if (hiddenCards.length <= cardsPerLoad) {
        document.getElementById('loadMore').classList.add('hidden');
    }
}

// Event listener for search input
document.querySelector('.search-input').addEventListener('input', (e) => {
    searchTerm = e.target.value.trim();
    
    // Reset category if searching
    if (searchTerm !== '') {
        currentCategory = 'all';
        document.querySelectorAll('.tag').forEach(tag => {
            tag.classList.remove('active');
            if (tag.dataset.category === 'all') {
                tag.classList.add('active');
            }
        });
    }
    
    visibleCards = 3; // Reset visible cards count
    filterAndDisplayBlogs();
});

// Event listener for category tags
document.querySelector('.tags-container').addEventListener('click', (e) => {
    e.preventDefault();
    if (e.target.classList.contains('tag')) {
        // Update active tag
        document.querySelectorAll('.tag').forEach(tag => tag.classList.remove('active'));
        e.target.classList.add('active');

        // Clear search input
        const searchInput = document.querySelector('.search-input');
        searchInput.value = '';
        searchTerm = '';

        // Update category and refresh display
        currentCategory = e.target.dataset.category;
        visibleCards = 3; // Reset visible cards count
        filterAndDisplayBlogs();
    }
});

// Event listener for load more button
document.getElementById('loadMore').addEventListener('click', loadMore);

// Initial load
filterAndDisplayBlogs();