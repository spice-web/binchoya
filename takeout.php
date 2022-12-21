<?php $pageName = "page_takeout"; ?>
<?php include('./component/head.php'); ?>
</head>

<?php include('./component/header.php'); ?>
<?php include('./component/PageTitle.php'); ?>


<!-- contents -->
<div class="container">
  <div class="takeout__hero">
    <p class="takeout__catch txt-center text">ご自宅でいつでも好きな時に<br>びんちょうやの鍋や焼き鳥を<br>ご賞味いただけます！</p>

    <figure class="takeout__logo">
      <img src="./images/logo/logo_footer_auto.webp" alt="びんちょうや自動販売機" width="100%" height="auto">
    </figure>

    <figure class="takeout__image">
      <img src="./images/takeout/machine.webp" alt="自動販売機" width="100%" height="auto">
    </figure>
  </div>


  <h2 class="hl-red">販売中のメニュー</h2>
  <div class="machine-menu">
    <?php $items = [
      ['j001', '自家製スープ、こだわりの麺、国産牛もつ肉の3点入り', 'もつ鍋セット （2人前）', '1,500円'],
      ['j002', 'お鍋にピッタリの 厳選した和牛の小腸です', '国産牛もつ肉単品 （200g）', '800円'],
      ['j003', '自家製スープ、鶏肉、つくね、こだわり麺の4点入り', '博多水炊きセット （2人前）', '2,200円'],
      ['j004', 'コラーゲンたっぷり！女性にも大好評の濃厚な自家製スープです', '博多水炊きスープ （500cc×1パック）', '600円'],
      ['j005', '博多水炊きに合わせて大将がこだわり抜いた一品。', 'オリジナルぽん酢 （300cc）', '600円'],
      ['j006', 'しっかり味が染み込んだ当店特製のチャーシューをどうぞ', 'チャーシュー （5枚）', '650円'],
      ['j007', '博多のとり皮！秘伝の味付けが癖になる！', 'ねじねじ （10本入り）', '1,600円'],
      ['j008', '自家製スープ、こだわりの麺、国産牛もつ肉の3点入り', '特製めん （2人前）', '400円'],
      ['j009', '初めは、締めのラーメン。いつしか評判を呼び、ご家庭でも味わえるように。', '鶏白湯ラーメン （2食入り）', '864円'],
      ['ramennuiki', '', '', '']
    ]; ?>
    <?php foreach ($items as $value) : ?>
      <ul class="takeout-menu__wrap">
        <li>
          <figure>
            <img src="./images/food/<?= $value[0]; ?>.webp" alt="<?= $value[2]; ?>" width="100%" height="auto" class="radius">
            <figcaption class="takeout-menu__cap text"><?= $value[1]; ?></figcaption>
          </figure>
        </li>
        <li class="takeout-menu__price"><?= $value[2]; ?><?= $value[3]; ?></li>
      </ul>
    <?php endforeach; ?>
  </div>
  <p class="note txt-center">※掲載の価格はすべて税込表示価格です。※掲載の写真はイメージです。</p>
</div>

<!-- contents -->

<?php include('./component/footer.php'); ?>