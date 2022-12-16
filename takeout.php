<?php include('./component/head.php'); ?>

<?php include('./component/header.php'); ?>

<!-- contents -->
<div class="container">
  <p>ご自宅でいつでも好きな時に びんちょうやの鍋や焼き鳥を ご賞味いただけます！</p>

  <h2><img src="./images/logo/logo_footer_auto.webp" alt="びんちょうや自動販売機" width="100%" height="auto"></h2>
  <figure><img src="./images/salses/machine.webp" alt="自動販売機" width="100%" height="auto"></figure>

  <h2 class="hl-red">販売中のメニュー</h2>
  <div class="machine-menu">
    <?php $items = [
      ['j001', '自家製スープ、こだわりの麺、 国産牛もつ肉の3点入り', 'もつ鍋セット （2人前）', '1,500円'],
      ['j002', '', 'お鍋にピッタリの 厳選した和牛の小腸です', '国産牛もつ肉単品 （200g）', '800円'],
      ['j003', '自家製スープ、鶏肉、つくね、 こだわり麺の4点入り', '博多水炊きセット （2人前）', '2,200円'],
      ['j004', '博多水炊きに合わせて 大将がこだわり抜いた一品。', '博多水炊きスープ （500cc×1パック）', '600円'],
      ['j005', '博多水炊きに合わせて 大将がこだわり抜いた一品。', 'オリジナルぽん酢 （300cc）', '600円'],
      ['j006', 'しっかり味が染み込んだ 当店特製のチャーシューをどうぞ', 'チャーシュー （5枚）', '650円'],
      ['j007', '博多のとり皮！ 秘伝の味付けが癖になる！', 'ねじねじ （10本入り）', '1,600円'],
      ['j008', '自家製スープ、こだわりの麺、 国産牛もつ肉の3点入り', '特製めん （2人前）', '400円'],
      ['ramennuiki', '', '', '']
    ]; ?>
    <?php foreach ($items as $value) : ?>
      <ul>
        <li>
          <figure>
            <img src="./images/food/<?= $value[0]; ?>.webp" alt="<?= $value[2]; ?>" width="100%" height="auto">
            <figcaption><?= $value[1]; ?></figcaption>
          </figure>
        </li>
        <li><?= $value[2]; ?><?= $value[3]; ?></li>
      </ul>
    <?php endforeach; ?>
  </div>
  <p class="note">※掲載の価格はすべて税込表示価格です。※掲載の写真はイメージです。</p>
</div>

<!-- contents -->

<?php include('./component/footer.php'); ?>