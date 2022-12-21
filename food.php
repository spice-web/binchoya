<?php $pageName = "page_food-menu"; ?>

<?php include('./component/head.php'); ?>
</head>

<?php include('./component/header.php'); ?>
<?php include('./component/PageTitle.php'); ?>

<!-- contents -->
<div class="container --sm">

  <!-- ****************
  FOOD
**************** -->
  <h2 class="hl-red">お料理</h2>
  <!-- イメージ画像 -->
  <div class="food-menu__pickup">
    <figure>
      <img src="/images/food/j001.webp" alt="もつ鍋" width="100%" height="auto" class="radius">
      <figcaption class="txt-center">もつ鍋</figcaption>
    </figure>
    <figure>
      <img src="/images/food/j003.webp" alt="水炊き鍋" width="100%" height="auto" class="radius">
      <figcaption class="txt-center">水炊き鍋</figcaption>
    </figure>
  </div>
  <!-- イメージ画像 -->

  <section class="food-menu__wrap">
    <div class="food-menu__box">
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">鍋料理（一人前）</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <div>
              <dt>もつ鍋</dt>
              <dd>1,500円</dd>
            </div>

            <div>
              <dt>水炊き鍋</dt>
              <dd>2,300円</dd>
            </div>

            <div>
              <dt>しゃぶしゃぶ鍋</dt>
              <dd>2,300円</dd>
            </div>
          </dl>

          <div class="food-menu__item--sub">
            <h4 class="food-menu__title--sub">トッピング</h4>
            <dl class="food-menu">
              <?php
              $items = [
                ['キャベツ', '300円'],
                ['ニラ', '200円'],
                ['とうふ', '150円'],
                ['もち', '150円'],
                ['うどん', '200円'],
                ['ラーメン', '300円'],
                ['ごはん（1人前）', '200円'],
                ['たまご', '100円'],
                ['明太子（1本）', '350円']
              ]; ?>
              <?php foreach ($items as $value) : ?>
                <div>
                  <dt><?= $value[0]; ?></dt>
                  <dd><?= $value[1]; ?></dd>
                </div>
              <?php endforeach; ?>
            </dl>
          </div>
        </dd><!-- 鍋料理 -->
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">おつまみ</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['梅なんこつ', '400円'],
              ['焼き枝豆', '400円'],
              ['呉がんす', '400円'],
              ['冷奴', '400円'],
              ['とり皮みそ煮込み', '550円'],
              ['牛スジポン', '550円']
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">サラダ</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['あっさりキャベツ', '400円'],
              ['大根サラダ', '400円'],
              ['豆腐サラダ', '700円'],
              ['ハムサラダ', '700円'],
              ['牛カルパッチョ', '850円']
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- サラダ -->
        </dd>
      </dl>
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">お造り</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['お造り盛', '1,200円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- お造り -->
        </dd>
      </dl>
    </div><!-- food-menu__box -->
    <div class="food-menu__box">
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">揚物</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['明太チーズ春巻き(1本)', '350円'],
              ['山盛りポテトフライ', '550円'],
              ['お袋自慢コロッケ', '550円'],
              ['大人カレーコロッケ', '550円'],
              ['串カツ(二本)', '550円'],
              ['サクッとチーズ棒', '650円'],
              ['ゲソ天', '700円'],
              ['びんや特製唐揚げ', '800円'],
              ['タコ天', '850円'],
              ['上ミノ天', '900円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!--  -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">一品料理</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['手造りギョウザ', '550円'],
              ['もろこしバター', '550円'],
              ['もやしブー', '600円'],
              ['上ミノ塩焼', '850円'],
              ['親もも', '800円'],
              ['ウニホウレン<br>（フランスパン付）', '1,000円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- 一品料理 -->
        </dd>
      </dl>
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">お肉料理</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['ブリ旨ホルモン鉄板焼', '900円'],
              ['ネギタンステーキ', '950円'],
              ['博多名物地鶏のたたき', '1,000円'],
              ['広島牛鉄板燒', '1,000円'],
              ['白センマイ刺し', '1,200円'],
              ['馬刺し・馬ユッケ', '1,700円'],
              ['牛刺し', '1,700円'],
              ['牛たたき', '1,700円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- お肉料理 -->
        </dd>
      </dl>
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">ご飯もの</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['牛こうね肉うどん', '650円'],
              ['明太子茶漬け', '650円'],
              ['梅維炊', '700円'],
              ['鶏白湯らー麺', '850円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- ご飯もの -->
        </dd>
      </dl>

    </div><!-- food-menu__box -->
  </section>

  <p class="food-foot txt-center text">店内の黒板に、季節のメニューもございます。</p>

  <!-- ****************
  DRINK
**************** -->
  <h2 class="hl-red">串焼き</h2>
  <section class="food-menu__wrap">
    <div class="food-menu__box">
      <div class="food-menu__item">
        <dl class="food-menu">
          <?php
          $items = [
            ['びんちょうや巻', '330円'],
            ['とり皮（たれ・塩）', '220円'],
            ['ハツ', '220円'],
            ['ズリ', '220円'],
            ['せせり', '220円'],
            ['豚バラ', '220円'],
            ['牛さがり', '330円'],
          ]; ?>
          <?php foreach ($items as $value) : ?>
            <div>
              <dt><?= $value[0]; ?></dt>
              <dd><?= $value[1]; ?></dd>
            </div>
          <?php endforeach; ?>
        </dl><!--  -->
      </div>
    </div>
    <div class="food-menu__box">
      <div class="food-menu__item">
        <dl class="food-menu">
          <?php
          $items = [
            ['チャーシュー', '330円'],
            ['燻製うずら', '330円'],
            ['シソ巻', '330円'],
            ['ヤマシソ', '330円'],
            ['さんま', '380円'],
            ['明太子', '380円'],
            ['貝柱', '380円'],
          ]; ?>
          <?php foreach ($items as $value) : ?>
            <div>
              <dt><?= $value[0]; ?></dt>
              <dd><?= $value[1]; ?></dd>
            </div>
          <?php endforeach; ?>
        </dl><!--  -->
      </div>
    </div><!-- food-menu__box -->
  </section>


  <!-- ****************
  Drink
**************** -->
  <h2 class="hl-red">お飲み物</h2>
  <!-- イメージ画像 -->
  <div class="food-menu__pickup">
    <figure>
      <img src="/images/food/d001.webp" alt="ウイスキー" width="100%" height="auto" class="radius">
    </figure>
    <figure>
      <img src="/images/food/d002.webp" alt="ハイボール" width="100%" height="auto" class="radius">
    </figure>
  </div>
  <!-- イメージ画像 -->
  <section class="food-menu__wrap">
    <div class="food-menu__box">
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">生ビール</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['キリン一番搾り(小)', '450円'],
              ['キリン一番搾り(中)', '600円'],
              ['キリン一番搾り(大)', '950円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- 生ビール -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">瓶ビール</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['アサヒスーパードライ(中)', '650円'],
              ['キリンラガー(中)', '650円'],
              ['キリンクラシックラガー(大)', '800円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- 瓶ビール -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">樽詰ハイボール</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['ホワイトホースハイボール', '500円'],
              ['メガハイボール', '900円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- 樽詰ハイボール -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">サワー</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['ゆずみつサワー', '450円'],
              ['梅サワー', '450円'],
              ['巨峰サワー', '450円'],
              ['ライムサワー', '450円'],
              ['特製レモンサワー', '500円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- サワー -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">日本酒</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['賀茂鶴 広島 本醸造辛口', '600円'],
              ['宝剣 広島 純米辛口', '700円'],
              ['雨後の月 広島 純米辛口', '700円'],
              ['獺祭 山口 純米大吟醸', '700円'],
              ['上喜元 山形 特別純米', '700円'],
              ['くどき上手 山形 吟醸超辛口', '700円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!--  -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">お燗</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['賀茂鶴(二合)広島 本醸造', '1,200円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!--  -->
        </dd>
      </dl>
    </div>
    <div class="food-menu__box">
      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">梅酒</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['さらりの梅酒', '650円'],
              ['魔王の梅酒', '650円'],
              ['賀茂鶴の梅酒', '800円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!--  -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">ワイン</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['赤・白', '700円'],
              ['スパークリングボトル', '3,200円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- ワイン -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">焼酎</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['二階堂 大分 麦', '500円'],
              ['黒霧島 宮崎 芋', '500円'],
              ['赤霧島 宮崎 芋', '600円'],
              ['島娘 鹿児島 芋', '600円'],
              ['三岳 鹿児島 芋', '600円'],
              ['萬膳 鹿児島 芋', '1,000円'],
              ['森伊蔵 鹿児島 芋', '1,700円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- 焼酎 -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">ボトルキープ(五合瓶)</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['二階堂・黒霧島', '3,000円'],
              ['赤霧島・島娘', '3,500円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- ボトルキープ(五合瓶) -->
        </dd>
      </dl>

      <dl class="food-menu__item">
        <dt>
          <h3 class="food-menu__title">ソフトドリンク</h3>
        </dt>
        <dd>
          <dl class="food-menu">
            <?php
            $items = [
              ['カルピス', '300円'],
              ['ウーロン茶', '300円'],
              ['オレンジ', '300円'],
              ['ラムネ', '300円'],
              ['コーラ', '300円'],
              ['ジンジャエール', '300円'],
              ['ノンアルコールビール', '500円'],
            ]; ?>
            <?php foreach ($items as $value) : ?>
              <div>
                <dt><?= $value[0]; ?></dt>
                <dd><?= $value[1]; ?></dd>
              </div>
            <?php endforeach; ?>
          </dl><!-- ソフトドリンク -->
        </dd>
      </dl>
    </div><!-- BOX -->
  </section>
  <div class="food-foot txt-center text">店内の黒板に、月替りの日本酒もございます。</div>
</div><!-- container -->

<!-- contents -->
<?php include('./component/footer.php'); ?>