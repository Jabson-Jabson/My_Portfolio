<?php
require_once "data.php";
require_once "components.php";
?>
<!DOCTYPE html>
<html lang="ka">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>კონტაქტი | ჯაბა მაისურაძე</title>
  <link rel="stylesheet" href="style.css">
</head>
<body id="vanta-bg">
  <?php renderHeader($menuItems); ?>
  
  <?php renderContactForm($contactInfo); ?>

  <?php renderFooter($contactInfo); ?>

  <script src="https://cdn.jsdelivr.net/npm/three@0.121.1/build/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
  <script src="script_new.js"></script>
</body>
</html>
