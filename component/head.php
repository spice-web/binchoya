<?php include('./component/read.php'); ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $title; ?>【この感動をご家庭で】博多うまかもん びんちょうや | 博多水炊き・ラーメン</title>
  <meta name="decsription" content="<?= $description; ?>">
  <link rel="icon" href="../images/icon/favicon.icon">

  <!-- jQuery -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>

  <!--slick -->
  <link rel="stylesheet" type="text/css" href="css/slick.css" />
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
  <script type="text/javascript" src="js/slick.min.js"></script>

  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css" />

  <!-- font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-WXQT2P2');
  </script>
  <!-- End Google Tag Manager -->