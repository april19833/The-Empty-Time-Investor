document.addEventListener('DOMContentLoaded', function() {
  // Theme toggle functionality
  const themeToggle = document.getElementById('theme-toggle');
  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme'); // Toggle dark theme class on body

    // Change moon icon color on dark theme toggle
    const moonIcon = themeToggle.querySelector('img');
    if (document.body.classList.contains('dark-theme')) {
      moonIcon.src = 'images/moon-white.gif'; // Assuming you have a white moon GIF
    } else {
      moonIcon.src = 'images/moon.gif'; // Original moon GIF
    }
  });

  // Accordion functionality
  const accordionItems = document.querySelectorAll('.accordion-item');

  accordionItems.forEach(item => {
    const clickTarget = item.querySelector('.accordion-item__click-target');
    const dropdown = item.querySelector('.accordion-item__dropdown');

    clickTarget.addEventListener('click', () => {
      const isOpen = item.classList.toggle('open');
      dropdown.style.display = isOpen ? 'block' : 'none';
      clickTarget.querySelector('.accordion-icon').textContent = isOpen ? '-' : '+';

      if (isOpen) {
        clickTarget.classList.add('animate__rotateIn');
      } else {
        clickTarget.classList.remove('animate__rotateIn');
      }
    });
  });
});
