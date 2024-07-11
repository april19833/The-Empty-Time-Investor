document.addEventListener('DOMContentLoaded', function() {
  // Theme toggle functionality
  const themeToggle = document.getElementById('theme-toggle');
  themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');
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
