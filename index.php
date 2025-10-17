
<?php
require_once "data.php";
require_once "components.php";
?>


<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ჯაბა მაისურაძე | ვებ დეველოპერი</title>

  <!--  SEO -->
  <meta name="description" content="მე ვარ ჯაბა მაისურაძე — ვებ დეველოპერი, რომელიც ქმნის თანამედროვე, სწრაფ და ფუნქციურ ვებსაიტებს. WordPress, HTML, CSS, PHP.">
  <meta name="keywords" content="Jaba Maisuradze, Portfolio, Web Developer, WordPress, HTML, CSS, PHP, Rustavi, Georgia">
  <meta name="author" content="Jaba Maisuradze">
  <link rel="icon" type="image/png" href="assets/images/my_logo.png">

  <!--  სტილები -->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

  <?php renderHeader($menuItems); ?>
  <?php renderHero($heroData); ?>
  <?php renderAbout($aboutData); ?>
  <?php renderWhyMe($whyCards); ?>
  <?php renderWorkSection($projects); ?>
  <?php renderContactForm($contactInfo); ?>
  <?php renderFooter($contactInfo); ?>

<body id="vanta-bg">

  
<!--  Scripts -->
<script src="script_new.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>


</body>
</html>
