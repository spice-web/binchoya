<?php $pageName = "page_shopInfo"; ?>

<?php include('./component/head.php'); ?>
</head>

<?php include('./component/header.php'); ?>
<?php include('./component/PageTItle.php'); ?>

<div class="container --sm">
  <h2 class="hl-red">店舗情報</h2>
  <div class="shopInfo__wrap">
    <?php $items = [
      ['店名', '博多うまかもん びんちょうや'],
      ['営業時間', 'ランチ/11：30～13:30（月、水、木、金）<br />ディナー/18：00～22:30（ラストオーダー）'],
      ['定休日', '火曜日'],
      ['席数', '31席 <br>（カウンター3席 テーブル6、2、2席 座敷18席）<br> 貸し切りはお電話にてご相談ください。'],
      ['クレジットカード', '利用可能（VISA、Master、JCB、AMEX、Diners）'],
      ['電子マネー', '交通系電子マネー（Suicaなど）、PayPay'],
      ['禁煙・喫煙', '完全禁煙'],
    ]; ?>
    <?php foreach ($items as $value) : ?>
      <dl class="shopInfo__def">
        <dt class="shopInfo__dttl"><?= $value[0]; ?></dt>
        <dd class="shopIndo__desc"><?= $value[1]; ?></dd>
      </dl>
    <?php endforeach; ?>
  </div>


  <h2 class="hl-red">ご予約・お問い合せ</h2>
  <div class="shopInfo__wrap">
    <p class="tel">TEL：082-256-9131<br />
      <span>ランチ/11：30～13:30（月、水、木、金）　<span class="nowrap">ディナー/18：00～22:30（ラストオーダー）</span></span>
    </p>
  </div>

  <h2 class="hl-red">住所・アクセス</h2>
  <div class="shopinfo__wrap">
    <?php $items = [
      ['住所', '〒734-0001 広島県広島市南区出汐3-10-4'],
      ['交通手段', '広島電鉄5号線「皆実町二丁目駅」から徒歩15分。<br />出汐三丁目バス停のすぐ前。'],
      ['駐車場', 'なし　（隣にコインパーキングあり）'],
    ]; ?>
    <?php foreach ($items as $value) : ?>
      <dl class="shopInfo__def">
        <dt class="shopInfo__dttl"><?= $value[0]; ?></dt>
        <dd class="shopIndo__desc"><?= $value[1]; ?></dd>
      </dl>
    <?php endforeach; ?>
  </div>

</div><!-- container -->
<div class="map" id="gmap"></div><!-- 地図を表示する div 要素（id="map"）-->


<?php include('./component/footer.php'); ?>


<script>
  var map;

  function initMap() {
    var target = document.getElementById('gmap');
    var empire = {
      lat: 34.376512,
      lng: 132.476506
    };
    //Empire State Bldg の緯度（latitude）と経度（longitude）
    map = new google.maps.Map(target, {
      center: empire,
      zoom: 14
    });

    var marker = new google.maps.Marker({
      position: empire,
      map: map,
      animation: google.maps.Animation.DROP,
      icon: "https://maps.google.com/mapfiles/ms/micons/red-dot.png"
    });
  }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhIsgXy3CI5V78tSnoL8BQ-6cfJUgY9-8&callback=initMap" async defer></script>