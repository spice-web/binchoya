<body class="<?= $pageName; ?>">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXQT2P2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <header class="header">
    <h1 class="header__logo"><a href="/"><img src="./images/logo/logo_wide.webp" alt="博多うまかもんびんちょうや" width="100%" height="auto"></a></h1>

    <nav class="header__nav">
      <ul class="nav__list no-deco">
        <li class="nav__item"><a href="/">トップ<span>TOP</span></a></li>
        <li class="nav__item"><a href="/food.php">メニュー<span>MENU</span></a></li>
        <li class="nav__item"><a href="/takeout.php">お持ち帰り<span>TAKEOUT</span></a></li>
        <li class="nav__item"><a href="/shopinfo.php">店舗情報<span>INFORMATION</span></a></li>
        <li class="nav__item webshop"><a href="<?= $webshop; ?>" target="_blank" rel="noreferrer noopener" class="link_opacity"><img src="../images/icon/webshop.webp" alt="webshop" width="45.95" height="auto"></a></li>
      </ul>
    </nav>

    <!-- ハンバーガーアイコン -->
    <div class="drawer__btn">
      <span></span>
      <span></span>
      <span></span>
    </div>

    <!-- オーバーレイ背景 -->
    <div class="drawer__bg"></div>

    <!-- ドロワーメニュー -->
    <div class="drawer__menu">
      <!-- ここにメニューコンテンツを挿入 -->
      <ul class="menu__list">
        <li class="menu__item"><a href="/">トップ</a></li>
        <li class="menu__item"><a href="/food.php">メニュー</a></li>
        <li class="menu__item"><a href="/takeout.php">お持ち帰り</a></li>
        <li class="menu__item"><a href="/shopinfo.php">店舗情報</a></li>
        <li class="menu__item"><a href="<?= $webshop; ?>" target="_blank" rel="noreferrer noopener">WEB SHOP</a></li>
      </ul>
    </div>
  </header>