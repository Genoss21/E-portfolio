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
