// Function to toggle the modal visibility
function toggleModal() {
  const modal = document.getElementById('default-modal');
  modal.classList.toggle('hidden');
  modal.classList.toggle('translate-y-0');
  modal.classList.toggle('translate-y-full');
}

// Tailwind dark mode configuration
tailwind.config = {
  darkMode: "class",
};

// Get dark mode toggle buttons
const darkBtn = document.getElementById("enable-dark");
const lightBtn = document.getElementById("disable-dark");

// Function to update the visibility of dark mode buttons
function updateDarkModeButtons() {
  if (document.documentElement.classList.contains("dark")) {
  darkBtn.classList.add("hidden");
  lightBtn.classList.remove("hidden");
  } else {
  darkBtn.classList.remove("hidden");
  lightBtn.classList.add("hidden");
  }
}

// Ensure buttons reflect the correct state on page load
updateDarkModeButtons();

// Enable dark mode
darkBtn.addEventListener("click", function () {
  document.documentElement.classList.add("dark");
  localStorage.setItem("darkMode", "enabled");
  updateDarkModeButtons();
});

// Disable dark mode
lightBtn.addEventListener("click", function () {
  document.documentElement.classList.remove("dark");
  localStorage.setItem("darkMode", "disabled");
  updateDarkModeButtons();
});

// Function to toggle dropdown visibility
function toggleDropdown(id) {
  document.querySelectorAll('[id^="dropdown"]').forEach(dropdown => {
    if (dropdown.id === id) {
      dropdown.classList.toggle('hidden');
    } else {
      dropdown.classList.add('hidden');
    }
  });
}

// DOMContentLoaded event to initialize sections and scrolling behavior
document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('section');
  const footer = document.querySelector('footer');
  

  sections.forEach(section => {
    if (!section.classList.contains('qualification')) {
      section.classList.add('snap-start');
    } else {
      section.classList.add('overflow-auto', 'max-h-screen'); // Enable normal scrolling
    }
  });

  if (footer) {
    footer.classList.add('snap-start'); // Ensure footer is part of the snapping flow
  }

  document.documentElement.classList.add('snap-y', 'snap-mandatory', 'h-screen', 'overflow-y-scroll', 'scroll-smooth');
  
  // Add smooth scrolling behavior
  document.documentElement.style.scrollBehavior = 'smooth';

  // Enhance smooth scrolling with a polyfill for better cross-browser support
  if ('scrollBehavior' in document.documentElement.style === false) {
    import('https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js').then(() => {
      SmoothScroll({ stepSize: 100, animationTime: 800 });
    });
  }

  // Smooth scrolling on mouse wheel, except in the qualification section
  window.addEventListener('wheel', (event) => {
    const qualificationSection = document.querySelector('.qualification');

    if (qualificationSection && qualificationSection.contains(event.target)) {
      // Let normal scrolling happen inside qualification section
      return;
    }

    event.preventDefault();
    const delta = Math.sign(event.deltaY);
    window.scrollBy({
      top: delta * 100,
      behavior: 'smooth'
    });
  }, { passive: false });
});

// Add shadow to header on scroll with smooth transition
window.addEventListener('scroll', () => {
  const header = document.querySelector('header');
  if (window.scrollY > 0) {
  header.classList.add('shadow-lg', 'transition-shadow', 'duration-300');
  } else {
  header.classList.remove('shadow-lg', 'transition-shadow', 'duration-300');
  }
});

// DOMContentLoaded event to initialize timeline scrolling behavior
document.addEventListener("DOMContentLoaded", function () {
  const timeline = document.getElementById("timeline-scroll");

  let isDown = false;
  let startY;
  let scrollTop;

  timeline.addEventListener("mousedown", (e) => {
    isDown = true;
    timeline.classList.add("active");
    startY = e.pageY - timeline.offsetTop;
    scrollTop = timeline.scrollTop;
    e.preventDefault(); // Prevent text selection
  });

  timeline.addEventListener("mouseleave", () => {
    isDown = false;
    timeline.classList.remove("active");
  });

  timeline.addEventListener("mouseup", () => {
    isDown = false;
    timeline.classList.remove("active");
  });

  timeline.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const y = e.pageY - timeline.offsetTop;
    const walk = (y - startY) * 1.5; // Adjust speed for smoother scrolling
    timeline.scrollTop = scrollTop - walk;
  });
});

// Function to show the selected tab (education or experience)
function showTab(tab) {
  document.getElementById('education-timeline').classList.add('hidden');
  document.getElementById('experience-timeline').classList.add('hidden');
  document.getElementById('education-tab').classList.remove('border-gray-800', 'dark:border-white');
  document.getElementById('experience-tab').classList.remove('border-gray-800', 'dark:border-white');

  if (tab === 'education') {
    document.getElementById('education-timeline').classList.remove('hidden');
    document.getElementById('education-tab').classList.add('border-gray-800', 'dark:border-white');
  } else {
    document.getElementById('experience-timeline').classList.remove('hidden');
    document.getElementById('experience-tab').classList.add('border-gray-800', 'dark:border-white');
  }
}

// Show the education tab by default
showTab('education');

// Show or hide the scroll-to-top button based on scroll position
window.addEventListener('scroll', function () {
  const scrollToTopBtn = document.getElementById('scrollToTopBtn');
  const aboutSection = document.getElementById('about');

  if (!aboutSection) return; // Prevent errors if 'about' section is missing

  const aboutTop = aboutSection.offsetTop;
  const scrollPosition = window.scrollY;

  if (scrollPosition >= aboutTop) {
    scrollToTopBtn.classList.remove('hidden', 'translate-y-10', 'opacity-0');
    scrollToTopBtn.classList.add('translate-y-0', 'opacity-100');
  } else {
    scrollToTopBtn.classList.add('hidden', 'translate-y-10', 'opacity-0');
    scrollToTopBtn.classList.remove('translate-y-0', 'opacity-100');
  }
});

// Function to scroll to the top of the page
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}

//About
function scrollToAbout() {
  const aboutSection = document.getElementById('about');
  if (aboutSection) {
    aboutSection.scrollIntoView({ behavior: 'smooth' });
  }
}

// Add event listener to the button
document.addEventListener('DOMContentLoaded', () => {
  const scrollToAboutBtn = document.getElementById('scrollToAbout');
  if (scrollToAboutBtn) {
    scrollToAboutBtn.addEventListener('click', scrollToAbout);
  }
});

//Contact
function scrollToContact() {
  const contactSection = document.getElementById('contact');
  if (contactSection) {
    contactSection.scrollIntoView({ behavior: 'smooth' });
  }
}

// Add event listener to the button
document.addEventListener('DOMContentLoaded', () => {
  const scrollToContactBtn = document.getElementById('scrollToContact');
  if (scrollToContactBtn) {
    scrollToContactBtn.addEventListener('click', scrollToContact);
  }
});

//Contact1
function scrollToContact1() {
  const contactSection = document.getElementById('contact');
  if (contactSection) {
    contactSection.scrollIntoView({ behavior: 'smooth' });
  }
}

// Add event listener to the button
document.addEventListener('DOMContentLoaded', () => {
  const scrollToContactBtn = document.getElementById('scrollToContact1');
  if (scrollToContactBtn) {
    scrollToContactBtn.addEventListener('click', scrollToContact1);
  }
});

//Tabs on testimonial 
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab-link");
  const content = document.getElementById("tab-content");

  const tabData = {
      profile: {
          title: "Client 1",
          content: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptatum aliquid earum atque accusamus iusto."
      },
      dashboard: {
          title: "Client 2",
          content: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, quod."
      },
      settings: {
          title: "Client 3",
          content: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit veniam aut error reiciendis molestiae quas."
      }
  };

  function setActiveTab(tab) {
      tabs.forEach(t => {
          t.classList.remove("active", "bg-gray-200", "dark:bg-gray-700");
      });
      tab.classList.add("active", "bg-gray-200", "dark:bg-gray-700");
  }

  function updateContent(tabKey) {
      content.innerHTML = `
           <span>
              <svg class="lg:w-[36px] lg:h-[36px] w-5 h-5 text-gray-800 dark:text-white lg:mb-4 mb-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M6 6a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3H5a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2H6Zm9 0a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3h-1a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3Z" clip-rule="evenodd"/>
              </svg>
          </span>
          <h1 class="lg:text-2xl text-lg font-semibold text-[#171824] dark:text-white lg:pb-4 pb-2">${tabData[tabKey].title}</h1>
          <p class="lg:text-lg text-sm text-gray-400">${tabData[tabKey].content}</p>
      `;
  }

  tabs.forEach(tab => {
      tab.addEventListener("click", function (e) {
          e.preventDefault();
          setActiveTab(this);
          const tabKey = this.getAttribute("data-tab");
          updateContent(tabKey);
      });
  });

  // Set first tab active by default
  setActiveTab(tabs[0]);
  updateContent(tabs[0].getAttribute("data-tab"));
});


//Hide modal when click a link
function toggleModal() {
  const modal = document.getElementById("default-modal");
  
  if (modal.classList.contains("hidden")) {
      modal.classList.remove("hidden", "translate-y-full");
      modal.classList.add("flex"); // Show the modal
  } else {
      modal.classList.remove("flex");
      modal.classList.add("hidden", "translate-y-full"); // Hide the modal
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("default-modal");
  const links = modal.querySelectorAll("a");

  links.forEach(link => {
      link.addEventListener("click", function () {
          modal.classList.remove("flex");
          modal.classList.add("hidden", "translate-y-full"); // Hide modal when clicking a link
      });
  });
});

//active state for the navbar
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll("section");
  const navLinks = document.querySelectorAll(".nav-link");

  const observer = new IntersectionObserver(
      (entries) => {
          entries.forEach((entry) => {
              if (entry.isIntersecting) {
                  navLinks.forEach((link) => {
                      link.classList.remove("active");
                      if (link.getAttribute("href").substring(1) === entry.target.id) {
                          link.classList.add("active");
                      }
                  });
              }
          });
      },
      { threshold: 0.5 } // Adjust based on when you want the section to be considered active
  );

  sections.forEach((section) => observer.observe(section));
});

//fade in for the here section
document.addEventListener("DOMContentLoaded", function () {
  const observerOptions = {
      root: null,
      rootMargin: "0px",
      threshold: 0.2, // Trigger when 20% of the element is visible
  };

  const fadeInElements = document.querySelectorAll("#fade-in-element, h1, p, button");
  
  const fadeInObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              if (entry.target.tagName.toLowerCase() === "p" || entry.target.tagName.toLowerCase() === "button") {
                  setTimeout(() => {
                      entry.target.classList.add("opacity-100", "scale-100");
                      entry.target.classList.remove("opacity-0", "scale-90");
                  }, 200); // Delay for <p> and <button> elements
              } else {
                  entry.target.classList.add("opacity-100", "scale-100");
                  entry.target.classList.remove("opacity-0", "scale-90");
              }
          } else {
              entry.target.classList.add("opacity-0", "scale-90");
              entry.target.classList.remove("opacity-100", "scale-100");
          }
      });
  }, observerOptions);

  fadeInElements.forEach(element => {
      element.classList.add("opacity-0", "scale-90", "transition-all", "duration-1000", "ease-in-out");
      fadeInObserver.observe(element);
  });

  // Smooth scroll for buttons
  document.getElementById("scrollToContact").addEventListener("click", function () {
      document.getElementById("contact").scrollIntoView({ behavior: "smooth" });
  });

  document.getElementById("scrollToAbout").addEventListener("click", function () {
      document.getElementById("about").scrollIntoView({ behavior: "smooth" });
  });
});
