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
  
  sections.forEach(section => {
  if (!section.classList.contains('qualification')) {
    section.classList.add('snap-start');
  } else {
    section.classList.add('overflow-auto', 'max-h-screen'); // Enable normal scrolling
  }
  });

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
