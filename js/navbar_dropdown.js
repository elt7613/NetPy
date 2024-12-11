document.addEventListener('DOMContentLoaded', () => {
    // State management
    let activeMainDropdown = null;
    let activeTechList = null;
    let activeContent = null;

    // Elements
    const mainDropdown = document.querySelector('.first-dropdown-content');
    const allTechSections = document.querySelectorAll('.netpy-tech, .netpy-academy, .netpy-kidz');
    const allTechLists = document.querySelectorAll('.list-1, .list-3, .list-4');
    const allContents = document.querySelectorAll('.netpy-tech-list-content-1, .netpy-tech-list-content-3, .netpy-tech-list-content-4');

    // Helper functions
    const closeAllSections = () => {
        allTechSections.forEach(section => {
            const list = section.querySelector('.netpy-tech-list, .netpy-academy-list, .netpy-kidz-list');
            if (list) list.style.display = 'none';
        });
    };

    const closeAllTechLists = () => {
        allTechLists.forEach(list => {
            list.classList.remove('active');
        });
        allContents.forEach(content => {
            content.style.display = 'none';
        });
    };

    // Main dropdown handler
    document.querySelector('.dropdown-conatiner').addEventListener('click', (e) => {
        e.stopPropagation();
        mainDropdown.style.display = mainDropdown.style.display === 'block' ? 'none' : 'block';
        if (mainDropdown.style.display === 'none') {
            closeAllSections();
            closeAllTechLists();
        }
    });

    // Tech sections handlers
    allTechSections.forEach(section => {
        section.addEventListener('click', (e) => {
            e.stopPropagation();
            const list = section.querySelector('.netpy-tech-list, .netpy-academy-list, .netpy-kidz-list');
            
            if (activeMainDropdown === section) {
                list.style.display = 'none';
                activeMainDropdown = null;
            } else {
                closeAllSections();
                closeAllTechLists();
                list.style.display = 'block';
                activeMainDropdown = section;
            }
        });
    });

    // Tech lists handlers
    allTechLists.forEach(list => {
        list.addEventListener('click', (e) => {
            e.stopPropagation();
            const content = list.querySelector('.netpy-tech-list-content-1, .netpy-tech-list-content-3, .netpy-tech-list-content-4');
            
            if (activeTechList === list) {
                content.style.display = 'none';
                list.classList.remove('active');
                activeTechList = null;
            } else {
                closeAllTechLists();
                list.classList.add('active');
                content.style.display = 'block';
                activeTechList = list;
            }
        });
    });

    // Close everything when clicking outside
    document.addEventListener('click', () => {
        mainDropdown.style.display = 'none';
        closeAllSections();
        closeAllTechLists();
        activeMainDropdown = null;
        activeTechList = null;
    });

    // Hover functionality
    const handleHover = (element, content) => {
        element.addEventListener('mouseenter', () => {
            if (!activeMainDropdown && !activeTechList) {
                content.style.display = 'block';
            }
        });

        element.addEventListener('mouseleave', () => {
            if (!activeMainDropdown && !activeTechList) {
                setTimeout(() => {
                    content.style.display = 'none';
                }, 100);
            }
        });
    };

    // Apply hover handlers
    allTechSections.forEach(section => {
        const list = section.querySelector('.netpy-tech-list, .netpy-academy-list, .netpy-kidz-list');
        if (list) handleHover(section, list);
    });

    allTechLists.forEach(list => {
        const content = list.querySelector('.netpy-tech-list-content-1, .netpy-tech-list-content-3, .netpy-tech-list-content-4');
        if (content) handleHover(list, content);
    });
});