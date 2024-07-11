// JavaScript for the accordion
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const clickTarget = item.querySelector('.accordion-item__click-target');
  const dropdown = item.querySelector('.accordion-item__dropdown');

  clickTarget.addEventListener('click', () => {
    const isOpen = item.classList.toggle('open');
    dropdown.style.display = isOpen ? 'block' : 'none';
    clickTarget.querySelector('.accordion-icon').textContent = isOpen ? '-' : '+';
  });
});

// JavaScript for theme toggle
const themeToggle = document.getElementById('theme-toggle');
let isDarkTheme = false;

themeToggle.addEventListener('click', () => {
  isDarkTheme = !isDarkTheme;
  document.body.classList.toggle('dark-theme', isDarkTheme);
});
