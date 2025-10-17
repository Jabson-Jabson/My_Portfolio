<?php
require_once "data.php";
require_once "components.php";
?>

<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ჩემს შესახებ | ჯაბა მაისურაძე</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body id="vanta-bg">

  <?php renderHeader($menuItems); ?>

  <!-- ABOUT SECTION -->

  <section id="about" class="about">
    <div class="container about-content">
      
      <div class="about-image">
        <img src="assets/images/jaba.jpg" alt="Jaba Maisuradze">
      </div>

      <div class="about-text">
        <h2>ჩემს შესახებ</h2>
        <p>მე ვსწავლობ ვებ დეველოპმენტს და უკვე ვქმნი მარტივ, მაგრამ სტრუქტურულ საიტებს. ჩემს ყოველდღიურ განვითარებაში HTML, CSS, WordPress და PHP თამაშობენ მთავარ როლს. ეს სფერო ჩემთვის მხოლოდ პროფესია კი არა — შემოქმედებითი გზა და შესაძლებლობაა იდეების ციფრულ ცხოვრებად ქცევის.</p>
        
        <div class="skills">
          <div class="skill"><span>HTML</span><div class="bar"><div class="fill" style="width: 90%;"></div></div></div>
          <div class="skill"><span>CSS</span><div class="bar"><div class="fill" style="width: 80%;"></div></div></div>
          <div class="skill"><span>WordPress</span><div class="bar"><div class="fill" style="width: 70%;"></div></div></div>
          <div class="skill"><span>PHP</span><div class="bar"><div class="fill" style="width: 70%;"></div></div></div>
        </div>

        <div class="facts">
          <div><i class="fa-solid fa-map-marker-alt"></i> რუსთავი, საქართველო</div>
          <div><i class="fa-solid fa-code"></i> 10+ პროექტი</div>
          <div><i class="fa-solid fa-graduation-cap"></i> SkillWill University</div>
          <div><i class="fa-solid fa-mug-hot"></i> Coffee = Coding fuel ☕</div>
        </div>

        <a href="works.php" class="btn-outline">იხილე ნამუშევრები</a>
      </div>
    </div>
  </section>

  <?php renderFooter($contactInfo); ?>

  <!-- BG EFFECT -->
  <script src="https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
  <script>
    VANTA.NET({
      el: "#vanta-bg",
      mouseControls: true,
      touchControls: true,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x00c6ff,
      backgroundColor: 0x0a0a0a,
      points: 10.00,
      maxDistance: 25.00,
      spacing: 18.00
    });
  </script>
</body>
</html>

