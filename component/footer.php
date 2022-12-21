<!-- footer top button -->
<div class="container --lg footer__nav">
  <?php
  if ($pageName == "page_takeout") : ?>
    <h3 class="footer-nav__hl-lv3">遠方の方はウェブショップでも<br class="br--dis-md">お買い求めいただけます</h3>
    <div class="sale__button single">
      <a href="<?= $webshop; ?>" target="_blank" rel="noreferrer noopener"><img src="/images/button/webshop.png" alt="びんちょうやオンラインショップ" width="100%" height="auto"></a>
    </div>
  <?php else : ?>
    <h3 class="footer-nav__hl-lv3">びんちょうやの味を<br class="br--dis-md">ご自宅でもお楽しみいただけます！</h3>

    <div class="sale__button">
      <a href="/takeout"><img src="/images/button/sales.png" alt="びんちょうや店前自動販売機" width="100%" height="auto"></a>
      <a href="<?= $webshop; ?>" target="_blank" rel="noreferrer noopener"><img src="/images/button/webshop.png" alt="びんちょうやオンラインショップ" width="100%" height="auto"></a>
    </div>

  <?php endif; ?>


  <?php
  $items = [
    ['food', 'びんちょうやメニュー', 'メニュー', 'MENU', '博多水炊きやもつ鍋などを中心に、様々な料理でお客さまをおもてなしします。'],
    ['takeout', 'びんちょうやのお店前にある自動販売機', 'お持ち帰り', 'TAKEOUT', '水炊きはもちろん、パスタやラーメンにも使えて便利な自家製「博多水炊きスープ」が大好評！'],
    ['shopinfo', '店内イメージ図', '店舗情報', 'INFORMATION', 'アクセス、営業時間や席数など<span class="nowrap">お店の詳しい情報は</span><span class="nowrap">こちらでご確認ください。</span>'],
  ]; ?>

  <div class="footer-nav__wrap">
    <?php foreach ($items as $value) : ?>
      <ul class="bg-orange footer-nav__list">
        <li class="footer-nav__list--head"></li>
        <li class="footer-nav__inner">
          <figure class="footer-nav__img">
            <a href="<?= $value[0]; ?>"><img src="/images/footer/f_<?= $value[0]; ?>.webp" alt="<?= $value[1]; ?>" width="100%" height="auto">
            </a>
          </figure>
          <dl class="footer-nav__def">
            <dt class="footer-nav__dttl">
              <a href="<?= $value[0]; ?>"><?= $value[2]; ?><span><?= $value[3]; ?></span></a>
            </dt>
            <dd class="footer-nav__desc text">
              <a href="<?= $value[0]; ?>"><?= $value[4]; ?></a>
            </dd>
          </dl>
        </li>
        <li class="footer-nav__list--foot"></li>
      </ul>
    <?php endforeach; ?>
  </div>

</div>

</main>


<footer class="footer">
  <div class="footer__inner">
    <div class="footer__head">
      <figure class="footer__logo"><img src="images/logo/logo_footer.webp" alt="博多うまかもん びんちょうや" width="100%" height="auto"></figure>
      <p class="footer__tel">TEL：082-256-9131</p>
      <ul class="footer__sns">
        <li><a href="https://www.youtube.com/@user-jy3xl9xw5h" target="_blank" rel="noreferrer noopener"><img src="./images/icon/yt.webp" alt="びんちょうや公式youtube" height="24.17" width="auto"></a></li>
        <li><a href="https://www.instagram.com/umai.bincho/" target="_blank" rel="noreferrer noopener"><img src="./images/icon/ig.webp" alt="びんちょうや公式インスタグラム" width="auto" height="30.67"></a></li>
        <li><a href="https://m.facebook.com/profile.php?id=100067533319877" rel="noreferrer noopener" target="_blank"><img src="./images/icon/fb.webp" alt="びんちょうや公式facebook" width="auto" height="30.86"></a></li>
        <li><a href="mailto:<?= $mailTo; ?>"><img src="./images/icon/mail.webp" alt="お問い合わせ" width="auto" height="19.24"></a></li>
      </ul>
    </div>
    <dl class="footer__info">
      <dt>［住&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所］</dt>
      <dd>〒734-0001<br />広島県広島市南区出汐3-10-4 </dd>
      <dt>［営業時間］</dt>
      <dd>
        <ul>
          <li>ランチ：11：30～13:30 <br class="br--dis-md"><span class="nowrap">（月、水、木、金）</span></li>
          <li>ディナー：18：00～22:30 <br class="br--dis-md"><span class="nowrap">（ラストオーダー）</span></li>
        </ul>
      </dd>
      <dt>［定 休 日］</dt>
      <dd>火曜日</dd>
      <dt>［駐 車 場］</dt>
      <dd>なし（隣にコインパーキングあり）</dd>
    </dl>

  </div>
  <p class="copyright">© 博多うまかもん びんちょうや</p>


  <!-- footer bottom fixed button -->
  <div class="footer__button no-deco">
    <a href="mailto:<?= $mailTo; ?>"><span class="--tel">お問い合わせ</span></a>
    <a href="<?= $webshop; ?>" target="_blank" rel="noreferrer noopener"><span class="--webshop">ウェブショップ</span></a>
  </div>
</footer>

<!-- ドロワーメニュー -->
<script>
  class Drawer {
    constructor() {
      this.bg = document.querySelector('.drawer__bg');
      this.btn = document.querySelector('.drawer__btn');
      this.menu = document.querySelector('.drawer__menu');
      this.body = document.body;
      this.active = 'active';
      this.init();
    }

    init() {
      this.bg.addEventListener('click', this, false);
      this.btn.addEventListener('click', this, false);
    }

    toggle() {
      if (!this.btn.classList.contains(this.active)) {
        this.menu.classList.add(this.active);
        this.bg.classList.add(this.active);
        this.btn.classList.add(this.active);
        this.body.style.overflowY = 'hidden';

      } else {
        this.menu.classList.remove(this.active);
        this.bg.classList.remove(this.active);
        this.btn.classList.remove(this.active);
        this.body.style.overflowY = 'auto';
      }
    }

    handleEvent(event) {
      this.toggle(event);
    }
  }
  const drawer = new Drawer();
</script>