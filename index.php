<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Investing in Empty Time</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
  <style>
    /* Кастомные стили для анимированного фона */
    .section-with-background {
      position: relative;
      background-color: #f0f0f0;
      overflow: hidden;
      padding: 100px 0;
    }

    .section-with-background::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('floating-elements.png') repeat;
      animation: floatAnimation 20s infinite linear;
    }

    @keyframes floatAnimation {
      0% {
        transform: translateX(0) translateY(0);
      }
      100% {
        transform: translateX(-100%) translateY(100%);
      }
    }

    /* Кастомные стили для эффекта параллакса */
    #parallax-section {
      background-image: url('parallax-background.jpg');
      background-size: cover;
      background-attachment: fixed;
      padding: 100px 0;
      text-align: center;
      color: white;
    }

    /* Кастомные стили для графических элементов */
    .graphic {
      background-color: #fff;
      padding: 100px 0;
    }

    .graphic-elements {
      display: flex;
      justify-content: space-around;
      align-items: center;
    }

    .graphic-element {
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <header>
    <div class="container">
      <h1>Investing in Empty Time</h1>
      <!-- Navigation menu -->
      <nav>
        <ul>
          <li><a href="#time-investment">Time Investment Strategies</a></li>
          <li><a href="#crypto-insights">Crypto Insights</a></li>
          <li><a href="#minimalist-lifestyle">Minimalist Lifestyle</a></li>
          <li><a href="#stylish-living">Stylish Living on a Budget</a></li>
          <li><a href="#tech-gadgets">Tech and Gadgets</a></li>
        </ul>
      </nav>
      <button id="theme-toggle">Toggle Theme</button>
    </div>
  </header>

  <main>
    <section id="time-investment" class="card section-with-background">
      <h2>Time Investment Strategies</h2>
      <p>Explore effective strategies for investing your time wisely.</p>
    </section>

    <section id="crypto-insights" class="card" id="parallax-section">
      <h2>Crypto Insights</h2>
      <p>Discover insights and updates from the cryptocurrency world.</p>
    </section>

    <section id="minimalist-lifestyle" class="card graphic">
      <h2>Minimalist Lifestyle</h2>
      <p>Learn about living a minimalist lifestyle for greater simplicity.</p>
      <div class="graphic-elements">
        <div class="graphic-element">
          <img src="graphic-element1.png" alt="Graphic Element 1">
          <p>Description of Element 1</p>
        </div>
        <div class="graphic-element">
          <img src="graphic-element2.png" alt="Graphic Element 2">
          <p>Description of Element 2</p>
        </div>
      </div>
    </section>

    <section id="stylish-living" class="card">
      <h2>Stylish Living on a Budget</h2>
      <p>Tips and ideas for maintaining a stylish home on a limited budget.</p>
    </section>

    <section id="tech-gadgets" class="card">
      <h2>Tech and Gadgets</h2>
      <p>Explore the latest in technology and gadgets for modern living.</p>
    </section>
  </main>

  <footer>
    <div class="container">
      <p>&copy; 2024 Investing in Empty Time</p>
      <!-- Footer links and social icons -->
      <div class="footer-links">
        <a href="#privacy-policy">Privacy Policy</a>
        <a href="#terms-of-service">Terms of Service</a>
      </div>
      <div class="social-icons">
        <a href="https://facebook.com" target="_blank">Facebook</a>
        <a href="https://twitter.com" target="_blank">Twitter</a>
        <a href="https://instagram.com" target="_blank">Instagram</a>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
  <script>
    // JavaScript для темной темы
    const themeToggle = document.getElementById('theme-toggle');
    themeToggle.addEventListener('click', function() {
      document.body.classList.toggle('dark-theme');
    });
  </script>
</body>
</html>
