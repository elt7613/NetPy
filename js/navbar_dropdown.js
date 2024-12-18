const secondColumnContent = {
    netpyTech: [
      "Software Development",
      "UI/UX Design",
      "Quality Analysis",
      "Cloud & Computing"
    ],
    netpyAcademy: [
      "Software Development Academy",
      "UI/UX Design Academy",
      "Quality Analysis Academy",
      "Cloud & Computing Academy"
    ],
    netpyKidz: [
      "Software Development Kidz",
      "UI/UX Design Kidz",
      "Quality Analysis Kidz",
      "Cloud & Computing Kidz"
    ]
  };
  
  const thirdColumnContent = {
    "Software Development": "<h3>Mobile App Development</h3><p>Native IOS | Native Android | Hybrid</p>",
    "UI/UX Design": "<h3>UI/UX Design</h3><p>Wireframing | Prototyping | Usability Testing</p>",
    "Quality Analysis": "<h3>Quality Analysis</h3><p>Manual Testing | Automation Testing | Performance Testing</p>",
    "Cloud & Computing": "<h3>Cloud Computing</h3><p>AWS | Azure | Google Cloud | DevOps</p>",
    "Software Development Academy": "<h3>Software Development Academy</h3><p>We teach software development concepts.</p>",
    "UI/UX Design Academy": "<h3>UI/UX Design Academy</h3><p>Learn UI/UX design principles here.</p>",
    "Quality Analysis Academy": "<h3>Quality Analysis Academy</h3><p>We specialize in software testing techniques.</p>",
    "Cloud & Computing Academy": "<h3>Cloud & Computing Academy</h3><p>Learn cloud infrastructure and computing skills.</p>",
    "Software Development Kidz": "<h3>Software Development Kidz</h3><p>Fun programming classes for kids!</p>",
    "UI/UX Design Kidz": "<h3>UI/UX Design Kidz</h3><p>Teach kids about design and creativity!</p>",
    "Quality Analysis Kidz": "<h3>Quality Analysis Kidz</h3><p>Kids learn software testing techniques!</p>",
    "Cloud & Computing Kidz": "<h3>Cloud & Computing Kidz</h3><p>Explore cloud technologies in a fun way!</p>"
  };
  
  function updateSecondColumn(type) {
    const secondColumn = document.getElementById("secondColumn");
    const subcategories = secondColumnContent[type];
  
    // Clear second column
    secondColumn.innerHTML = "";
  
    // Add subcategories
    subcategories.forEach((subcategory, index) => {
      const subcategoryItem = document.createElement("h3");
      subcategoryItem.textContent = subcategory;
      subcategoryItem.classList.add("subcategory-hover");
      if (index === 0) subcategoryItem.classList.add("active"); 
  
      secondColumn.appendChild(subcategoryItem);
  
      // Hover or click event for updating third column (based on device type)
      subcategoryItem.addEventListener("mouseover", () => {
        if (window.innerWidth > 768) { // Desktop: Hover behavior
          document.querySelectorAll(".subcategory-hover").forEach(item => item.classList.remove("active"));
          subcategoryItem.classList.add("active");
          updateThirdColumn(subcategory);
        }
      });
  
      // Click behavior for small devices (as hover won't work well)
      subcategoryItem.addEventListener("click", () => {
        document.querySelectorAll(".subcategory-hover").forEach(item => item.classList.remove("active"));
        subcategoryItem.classList.add("active");
        updateThirdColumn(subcategory);
      });
    });
  
    // Update third column with the first subcategory content
    updateThirdColumn(subcategories[0]);
  }
  
  function updateThirdColumn(title) {
    const thirdColumn = document.getElementById("thirdColumn");
    thirdColumn.innerHTML = thirdColumnContent[title] || "<p>No content available</p>";
  }
  
  document.querySelectorAll("#firstColumn .hover-item").forEach((item) => {
    item.addEventListener("mouseover", () => {
      document.querySelectorAll("#firstColumn .hover-item").forEach(i => i.classList.remove("default-active"));
      item.classList.add("default-active");
  
      const type = item.getAttribute("data-type");
      updateSecondColumn(type);
    });
  
    // Click behavior for mobile or tablet devices
    item.addEventListener("click", () => {
      document.querySelectorAll("#firstColumn .hover-item").forEach(i => i.classList.remove("default-active"));
      item.classList.add("default-active");
  
      const type = item.getAttribute("data-type");
      updateSecondColumn(type);
    });
  });
  
  // Default load
  document.addEventListener("DOMContentLoaded", () => {
    updateSecondColumn("netpyTech");
  });