<?php $webshop = "/";?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php include('./component/head.php');?>

</head>
<body>
  <?php include('./component/header.php'); ?>
  <main>
  
    <!-- slider -->
    <?php include('./component/slider.php') ;?>

    <div class="container --lg introduction">
      <h2 class="txt-center txt-lg catch">「笑顔と真心を<br>料理に込めて」</h2>
      <figure class="logo__top"><img src="images/logo/logo.webp" width="100%" height="auto" alt="博多うまかもん びんちょうや" loading="lazy" /></figure>
      <p class="text txt-center lh2 mb15">広島市南区出汐3丁目。<br>
      地元のお客さまが気軽に来れる居酒屋として、<br>様々な料理とお酒をご用意してお待ちしております。<br>お客さまが楽しい時間を過ごしていただけるよう<br>日々精進してまいります。</p>
    </div>

    <!-- slider -->
    <?php include('./component/slider_index.php') ;?>


    <div class="bg-orange pats">
      <div class="container noren">
      <h2 class="food_menu--lh-lv2">絶品！博多の“うまかもん”を<br class="br--dis-md" />ご堪能ください！</h2>
    
      <?php
        $items = [
          ['001', '001nuiki', 'モツ鍋', '自慢の自家製スープと<br />国産牛もつの旨みたっぷり溶け出した<br class="br--dis-md" />絶品もつ鍋がお客さまに人気！'],
          ['002', '002nuiki', '水炊き', '濃厚鶏白湯スープの博多水炊きは<br />コラーゲンたっぷりで<br />女性客にも大人気です！'],
          ['003', '003nuiki', 'ラーメン', '“締めのラーメン”がメニューになった<br class="br--dis-md" />ラーメン専門店に引けを取らない<br />本格的な鶏白湯ラーメン！'],
        ];
      ?>
      <?php foreach($items as $value) : ?>
        <figure class="food_menu --<?=$value[0];?>">
          <img src="/images/index/<?=$value[1];?>.webp" alt="<?=$value[2];?>" width="100%" height="auto">
          <figcaption><?=$value[3];?></figcaption>
        </figure>
      <?php endforeach ;?>
      </div>
    </div>

  <div class="container career">
    <h2 class="career__hl-lv2">濃厚！でもあっさり風味！<br class="br--dis-md" />本物の鶏白湯スープをご堪能ください</h2>
    <div class="career__box">
      <div class="career__textBox">
        <p class="name"><span>店主</span>河井 透</p>
        <p class="text">1959年広島県出身。家業が営む精肉店で25年間働き、TV番組を見たことをきっかけに、博多の串焼き店「まさかど」の店主 諌山雅裕氏に弟子入り。<br>2003年、横川に「博多串焼き びんちょうや」をオープン。2013年、「博多うまかもん びんちょうや」をオープン。<br>経験から導き出した、丁寧な鶏ガラの下処理と、妥協なく煮込むことで、とんこつのように濃厚な…でも、あっさりとした風味の、老若男女に好まれる鶏白湯スープを実現。柚子胡椒を入れて、さらに香り豊かな風味もお楽しみいただけます。</p>
      </div>
      <div class="career__img--human"><img src="./images/index/tk_nuki.webp" alt="店主 河井 透" width="100%" height="auto"></div>
      <div class="career__img--soup"><img src="./images/index/j004_.webp" alt="びんちょうや自慢のスープ" width="100%" height="auto"></div>
    </div>
  </div>

  <?php include('./component/footer.php');?>

<!-- slider -->
<script>
// ブレイクポイント
$(function () {
  $(".slider").slick({
    arrows: false,
    autoplay: true,
    adaptiveHeight: true,
    dots: false,
    // slidesToShow: 1,
    appendArrows: false,
    centerMode: true,// 前後スライドを部分表示
    centerPadding: '200px',// 両端の見切れるスライド幅
    responsive: [
      {
        breakpoint: 650, // 399px以下のサイズに適用
        settings: {
        // slidesToShow: 1,
        centerMode: false,
        centerPadding: 0,
        },
      },
    ],
  });
});
</script>

<script>
  $('.slider_index').slick({
    autoplay:true,
    autoplaySpeed:5000,
    slidesToShow: 3,
    appendArrows: false,
    responsive: [
      {
        breakpoint: 650, // 399px以下のサイズに適用
        settings: {
        slidesToShow: 1,
        centerMode: true,
        centerPadding: "15%",
        },
      },
    ],
	});
</script>
</body>
</html>