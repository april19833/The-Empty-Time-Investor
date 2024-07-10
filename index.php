<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Investing in Empty Time</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
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
    <?php
      $sections = [
        ["id" => "time-investment", "title" => "Time Investment Strategies", "description" => "Explore effective strategies for investing your time wisely."],
        ["id" => "crypto-insights", "title" => "Crypto Insights", "description" => "Discover insights and updates from the cryptocurrency world."],
        ["id" => "minimalist-lifestyle", "title" => "Minimalist Lifestyle", "description" => "Learn about living a minimalist lifestyle for greater simplicity."],
        ["id" => "stylish-living", "title" => "Stylish Living on a Budget", "description" => "Tips and ideas for maintaining a stylish home on a limited budget."],
        ["id" => "tech-gadgets", "title" => "Tech and Gadgets", "description" => "Explore the latest in technology and gadgets for modern living."]
      ];

      foreach ($sections as $section) {
        echo "<section id='{$section['id']}' class='card'>";
        echo "<h2>{$section['title']}</h2>";
        echo "<p>{$section['description']}</p>";
        echo "</section>";
      }
    ?>
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
</body>
</html>
