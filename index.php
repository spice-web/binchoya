<?php $webshop = "/";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('./component/head.php');?>

</head>
<body>
  <?php include('./component/header.php'); ?>
  <main>
  
    <!-- slider -->
    <?php include('./component/slider.php') ;?>

    <div class="container --lg">
      <h2 class="txt-center txt-lg catch">「笑顔と真心を<br>料理に込めて」</h2>
      <figure class="logo__top"><img src="images/logo/logo.webp" width="100%" height="auto" alt="博多うまかもん びんちょうや" loading="lazy" /></figure>
      <p class="text txt-center lh2 mb15">広島市南区出汐3丁目。<br>
      地元のお客さまが気軽に来れる居酒屋として、<br>様々な料理とお酒をご用意してお待ちしております。<br>お客さまが楽しい時間を過ごしていただけるよう<br>日々精進してまいります。</p>
    </div>

    <!-- slider -->
    <?php include('./component/slider_index.php') ;?>





    <div class="bg-orange">
      <h2>絶品！博多の“うまかもん”を ご堪能ください！</h2>
      <figure>
        <img src="" alt="">
        <figcaption>自慢の自家製スープと 国産牛もつの旨みたっぷり溶け出した 絶品もつ鍋がお客さまに人気！</figcaption>
      </figure>
    </div>

    <h2>濃厚！でもあっさり風味！ 本物の鶏白湯スープをご堪能ください</h2>
    <p>1959年広島県出身。家業が営む精肉店で25年間働き、TV番組を見たことをきっかけに、博多の串焼き店「まさかど」の店主 諌山雅裕氏に弟子入り。<br>2003年、横川に「博多串焼き びんちょうや」をオープン。2013年、「博多うまかもん びんちょうや」をオープン。<br>経験から導き出した、丁寧な鶏ガラの下処理と、妥協なく煮込むことで、とんこつのように濃厚な…でも、あっさりとした風味の、老若男女に好まれる鶏白湯スープを実現。柚子胡椒を入れて、さらに香り豊かな風味もお楽しみいただけます。</p>

      <p>濃厚！でもあっさり風味！ 本物の鶏白湯スープをご堪能ください</p>
  </main>

  <?php include('./component/footer.php');?>

<!-- ドロワーメニュー -->
<script>
class Drawer {
    constructor(){
        this.bg = document.querySelector('.drawer__bg');
        this.btn = document.querySelector('.drawer__btn');
        this.menu = document.querySelector('.drawer__menu');
        this.body = document.body;
        this.active = 'active';
        this.init();
    }
    
    init(){
        this.bg.addEventListener('click', this, false);
        this.btn.addEventListener('click', this, false);
    }
    
    toggle(){
        if(!this.btn.classList.contains(this.active)){
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
        // centerPadding: 0,
        },
      },
    ],
	});
</script>
</body>
</html>