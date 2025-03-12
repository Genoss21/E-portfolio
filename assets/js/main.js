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

function updateDarkModeButtons() {
  if (document.documentElement.classList.contains("dark")) {
    darkBtn.classList.add("hidden");
    lightBtn.classList.remove("hidden");
  } else {
    darkBtn.classList.remove("hidden");
    lightBtn.classList.add("hidden");
  }
}

// Ensure buttons reflect the correct state
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

function toggleDropdown(id) {
  document.querySelectorAll('[id^="dropdown"]').forEach(dropdown => {
      if (dropdown.id === id) {
          dropdown.classList.toggle('hidden');
      } else {
          dropdown.classList.add('hidden');
      }
  });
}

// Add snap scroll to sections with smooth scrolling
document.addEventListener('DOMContentLoaded', () => {
  const sections = document.querySelectorAll('section');
  sections.forEach(section => {
    section.classList.add('snap-start');
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

  // Smooth scrolling on mouse wheel
  window.addEventListener('wheel', (event) => {
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
