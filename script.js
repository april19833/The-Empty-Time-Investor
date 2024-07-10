document.getElementById('theme-toggle').addEventListener('click', () => {
  document.body.classList.toggle('dark-theme');
});
// JavaScript for accordion functionality
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const clickTarget = item.querySelector('.accordion-item__click-target');
  const dropdown = item.querySelector('.accordion-item__dropdown');

  clickTarget.addEventListener('click', () => {
    const isOpen = item.classList.toggle('open');
    dropdown.style.display = isOpen ? 'block' : 'none';
  });
});
