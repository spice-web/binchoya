<?php
$webshop = "https://binchoya.base.shop/";
$mailTo = "umai.bincho310@gmail.com";

// meta設定
if ($pageName == "page_takeout") {
  $title = "お持ち帰り | ";
  $description = "ご自宅でいつでも好きな時に、博多うまかもん びんちょうやの水炊き鍋や焼き鳥・ラーメンをご賞味いただけます！";
} elseif ($pageName == "page_food-menu") {
  $title = "メニュー | ";
  $description = "博多うまかもん びんちょうやでは、博多水炊きやもつ鍋などを中心に、様々な料理でお客さまをおもてなしします。ぜひ一度、ご賞味ください。";
} elseif ($pageName == "page_shopInfo") {
  $title = "店舗情報 | ";
  $description = "博多うまかもん びんちょうや [予約可]TEL:082-256-9131 住所:広島県広島市南区出汐3-10-4 その他アクセス、営業時間や席数などお店の詳しい情報はこちらでご確認ください。";
} else {
  $title = "";
  $description = "広島市南区出汐に店を構える博多うまかもん びんちょうやは、水炊きの本場博多で料理の修行を積んだ料理人が、広島流にアレンジしたこだわりの水炊きを提供しています。夜は博多水炊き鍋等を中心に、昼は水炊きのスープからラーメンにアレンジして提供しています。";
};
