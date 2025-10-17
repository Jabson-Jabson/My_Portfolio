<?php
function renderHeader($menuItems) {
  echo '<header class="header"><div class="container nav-container">';
  echo '<div class="logo"><img src="assets/images/my_logo.png" alt="Logo"></div>';
  echo '<div class="menu-toggle"><span></span><span></span><span></span></div>';
  echo '<nav class="nav"><ul>';

  foreach ($menuItems as $item) {
    
    $isDownload = !empty($item["download"]);
    $class = $isDownload ? 'class="download-btn"' : '';
    $download = $isDownload ? 'download' : '';
    echo "<li><a href='{$item['url']}' {$class} {$download}>{$item['label']}</a></li>";
  }

  echo '</ul></nav></div></header>';
}


function renderHero($heroData) {
  echo '<section id="home" class="hero"><div class="container hero-content">';
  echo "<div class='hero-text'><h2>{$heroData['greeting']}</h2><h1><span class='typing'></span></h1>";
  echo "<p>{$heroData['description']}</p>";
  echo "<div class='btns'><a href='#work' class='btn'>🚀 ნახე ნამუშევრები</a>";
  echo "<a href='{$heroData['cv']}' download class='btn-outline'>📄 გადმოწერე CV</a></div></div>";
  echo "<div class='hero-image'><img src='{$heroData['image']}' alt=''></div></div></section>";
}

function renderAbout($aboutData) {
  echo '<section id="about" class="about"><div class="container about-content">';
  echo "<div class='about-image'><img src='{$aboutData['image']}' alt=''></div>";
  echo "<div class='about-text'><h2>{$aboutData['title']}</h2><p>{$aboutData['text']}</p><div class='skills'>";
  foreach ($aboutData['skills'] as $s) {
    echo "<div class='skill'><span>{$s['name']}</span><div class='bar'><div class='fill' style='width: {$s['level']}%;'></div></div></div>";
  }
  echo "</div><div class='facts'>";
  foreach ($aboutData['facts'] as $f) {
    echo "<div><i class='{$f['icon']}'></i> {$f['text']}</div>";
  }
  echo "</div><a href='#work' class='btn-outline'>იხილე ნამუშევრები</a></div></div></section>";
}

function renderWhyMe($whyCards) {
  echo '<section id="why-me" class="why-me"><div class="container"><h2>რატომ მე?</h2><div class="why-grid">';
  foreach ($whyCards as $card) {
    echo "<div class='why-card'><i class='{$card['icon']}'></i><h3>{$card['title']}</h3><p>{$card['text']}</p></div>";
  }
  echo '</div></div></section>';
}

function renderWorkSection($projects) {
  echo '<section id="work" class="work"><div class="container"><h2>My Works</h2><div class="work-grid">';
  foreach ($projects as $p) {
    echo "<div class='work-card'>
            <img src='{$p['image']}' alt='{$p['title']}'>
            <h3>{$p['title']}</h3>
            <p>{$p['subtitle']}</p>
            <div class='btn-wrapper'>
              <a href='{$p['github']}' target='_blank' class='btn'>
                <i class='fa-brands fa-github'></i> View on GitHub
              </a>
            </div>
          </div>";
  }
  echo '</div></div></section>';
}

function renderContactForm($contactInfo) {
  echo '<section id="contact" class="contact-section">';
  echo '<h2>Contact Me</h2>';
  echo '<form id="contactForm">
          <div class="form-group">
            <input type="text" id="firstName" name="firstName" placeholder="სახელი" required>
            <input type="text" id="lastName" name="lastName" placeholder="გვარი" required>
          </div>
          <div class="form-group">
            <input type="tel" id="phone" name="phone" placeholder="ტელეფონი" required>
            <input type="email" id="email" name="email" placeholder="ელფოსტა" required>
          </div>
          <textarea id="message" name="message" rows="5" placeholder="შეტყობინება..." required></textarea>
          <button type="submit" class="btn-submit">Send Message</button>
        </form>
        <p id="formStatus" class="status-message"></p>';
  echo "<iframe src='{$contactInfo['map']}' width='100%' height='250' style='margin-top:20px;border-radius:10px;'></iframe></section>";
}



function renderFooter($contactInfo) {
  echo '<footer class="footer"><div class="container footer-content">';

  //  საკონტაქტო ინფორმაცია
  echo "<div class='contact-info'>
          <p>📞 <a href='tel:{$contactInfo['phone']}'>{$contactInfo['phone']}</a></p>
          <p>📧 <a href='mailto:{$contactInfo['email']}'>{$contactInfo['email']}</a></p>
          <p>📍 {$contactInfo['location']}</p>
        </div>";

  //  სოციალური ბმულები
  echo "<div class='social-links'>";
  foreach ($contactInfo['socials'] as $s) {
    echo "<a href='{$s['url']}' target='_blank' rel='noopener noreferrer'>
            <img src='{$s['icon']}' alt='social icon'>
          </a>";
  }
  echo "</div>";

  
  echo "<p class='copyright'>© 2025 Jaba Maisuradze — ყველა უფლება დაცულია</p></div>";

  
  echo "<a href='#home' class='back-to-top'><i class='fa-solid fa-arrow-up'></i></a>";

  echo '</footer>';
}

